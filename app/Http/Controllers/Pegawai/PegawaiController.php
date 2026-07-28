<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Helpdesk;
use App\Models\PersetujuanDigital;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PegawaiController extends Controller
{
    /**
     * Show the pegawai dashboard.
     */
    public function dashboard(): View
    {
        $user = auth()->user();

        $laporans = Helpdesk::where('id_pelapor', $user->user_id)
            ->orderBy('tanggal_lapor', 'desc')
            ->get();

        $pendingApprovalLaporan = Helpdesk::where('id_pelapor', $user->user_id)
            ->where('status_Helpdesk', 'Waiting Approval')
            ->first();

        return view('pegawai.dashboard', compact('laporans', 'user', 'pendingApprovalLaporan'));
    }

    /**
     * Show the laporan helpdesk page.
     */
    public function laporanHelpdesk(): View
    {
        $user = auth()->user();

        $laporans = Helpdesk::with('pelapor')
            ->where('id_pelapor', $user->user_id)
            ->orderBy('tanggal_lapor', 'desc')
            ->get();

        return view('pegawai.laporan_helpdesk', compact('laporans', 'user'));
    }

    /**
     * Show the form to create a new report.
     */
    public function createLaporan(): View
    {
        $user = auth()->user();

        return view('pegawai.membuat_laporan_pegawai', compact('user'));
    }

    /**
     * Store a new helpdesk report.
     */
    public function storeLaporan(Request $request): RedirectResponse
    {
        $request->validate([
            'judul_masalah' => 'required|string|max:255',
            'deskripsi_keluhan' => 'required|string',
            'foto_helpdesk' => 'nullable|array',
            'foto_helpdesk.*' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi,webm,mkv|max:51200',
        ]);

        $user = auth()->user();

        // Handle photo uploads
        $photoPaths = [];
        if ($request->hasFile('foto_helpdesk')) {
            foreach ($request->file('foto_helpdesk') as $photo) {
                if ($photo->isValid()) {
                    $filename = time().'_'.uniqid().'.'.$photo->extension();
                    $photo->move(public_path('simpan_foto'), $filename);
                    $photoPaths[] = 'simpan_foto/'.$filename;
                }
            }
        }

        DB::transaction(function () use ($user, $request, $photoPaths) {
            Helpdesk::create([
                'nomor_Helpdesk' => Helpdesk::generateNomorHelpdesk(),
                'id_pelapor' => $user->user_id,
                'judul_masalah' => $request->judul_masalah,
                'deskripsi_keluhan' => $request->deskripsi_keluhan,
                'foto_helpdesk' => ! empty($photoPaths) ? $photoPaths : null,
                'status_Helpdesk' => 'In Progress',
                'tanggal_lapor' => now(),
            ]);
        });

        return redirect()->route('pegawai.laporan-helpdesk')
            ->with('success', 'Laporan berhasil dikirim.');
    }

    /**
     * Show detail of a specific report.
     */
    public function detailLaporan($id): View
    {
        $user = auth()->user();

        $laporan = Helpdesk::with('pelapor')
            ->where('id_helpdesk', $id)
            ->where('id_pelapor', $user->user_id)
            ->firstOrFail();

        return view('pegawai.detail_laporan_pegawai', compact('laporan', 'user'));
    }

    /**
     * Show the digital validation & approval page for a report.
     */
    public function validasiDigital($id): View
    {
        $user = auth()->user();

        $laporan = Helpdesk::with(['pelapor', 'tindakanPerbaikan'])
            ->where('id_helpdesk', $id)
            ->where('id_pelapor', $user->user_id)
            ->where('status_Helpdesk', 'Waiting Approval')
            ->firstOrFail();

        return view('pegawai.persetujuan_validasi_digital', compact('laporan', 'user'));
    }

    /**
     * Validasi dan selesaikan laporan yang statusnya "Waiting Approval".
     */
    public function validasiSelesai($id): RedirectResponse
    {
        $user = auth()->user();

        $laporan = Helpdesk::where('id_helpdesk', $id)
            ->where('id_pelapor', $user->user_id)
            ->where('status_Helpdesk', 'Waiting Approval')
            ->firstOrFail();

        DB::transaction(function () use ($laporan, $user) {
            // Update status helpdesk menjadi Completed
            $laporan->update([
                'status_Helpdesk' => 'Completed',
            ]);

            // Simpan persetujuan digital
            PersetujuanDigital::create([
                'id_helpdesk' => $laporan->id_helpdesk,
                'id_penyetuju' => $user->user_id,
                'waktu_persetujuan' => now(),
                'token_validasi' => 'VAL-' . strtoupper(uniqid()),
                'status_dokumen' => 'Valid',
            ]);
        });

        return redirect()->route('pegawai.dashboard')
            ->with('success', 'Laporan #' . $laporan->nomor_Helpdesk . ' berhasil divalidasi dan diselesaikan.');
    }
}

<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Helpdesk;
use App\Models\PersetujuanDigital;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    public function laporanHelpdesk(Request $request): View
    {
        $user = auth()->user();

        $query = Helpdesk::with('pelapor')
            ->where('id_pelapor', $user->user_id)
            ->orderBy('tanggal_lapor', 'desc');

        // Filter tab: 'semua' | 'aktif' | 'arsip'
        $filter = $request->input('filter', 'semua');

        if ($filter === 'aktif') {
            $query->where('status_Helpdesk', '!=', 'Completed');
        } elseif ($filter === 'arsip') {
            $query->where('status_Helpdesk', 'Completed');
        }

        $laporans = $query->get();

        // Jumlah laporan per kategori untuk tab filter
        $jumlahSemua = Helpdesk::where('id_pelapor', $user->user_id)->count();
        $jumlahAktif = Helpdesk::where('id_pelapor', $user->user_id)
            ->where('status_Helpdesk', '!=', 'Completed')
            ->count();
        $jumlahArsip = $jumlahSemua - $jumlahAktif;

        return view('pegawai.laporan_helpdesk', compact('laporans', 'user', 'filter', 'jumlahSemua', 'jumlahAktif', 'jumlahArsip'));
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

        $laporan = Helpdesk::with([
                'pelapor',
                'tindakanPerbaikan' => function ($query) {
                    $query->orderByDesc('waktu_tindakan');
                },
            ])
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

    /**
     * Tandai laporan "Waiting Approval" sebagai belum selesai.
     * Mengembalikan status laporan ke "in repair" dan menandai persetujuan digital sebagai Invalid.
     */
    public function belumSelesai($id): RedirectResponse
    {
        $user = auth()->user();

        $laporan = Helpdesk::where('id_helpdesk', $id)
            ->where('id_pelapor', $user->user_id)
            ->whereIn('status_Helpdesk', ['Waiting Approval', 'Completed'])
            ->firstOrFail();

        DB::transaction(function () use ($laporan, $user) {
            // Kembalikan status laporan ke tahap perbaikan
            $laporan->update([
                'status_Helpdesk' => 'in repair',
            ]);

            // Tandai / catat persetujuan digital sebagai Invalid (belum selesai)
            $persetujuan = PersetujuanDigital::where('id_helpdesk', $laporan->id_helpdesk)
                ->latest('id_persetujuan')
                ->first();

            if ($persetujuan) {
                $persetujuan->update([
                    'status_dokumen' => 'Invalid',
                    'id_penyetuju' => $user->user_id,
                    'waktu_persetujuan' => now(),
                ]);
            } else {
                PersetujuanDigital::create([
                    'id_helpdesk' => $laporan->id_helpdesk,
                    'id_penyetuju' => $user->user_id,
                    'waktu_persetujuan' => now(),
                    'token_validasi' => 'INV-' . strtoupper(uniqid()),
                    'status_dokumen' => 'Invalid',
                ]);
            }
        });

        return redirect()->route('pegawai.dashboard')
            ->with('success', 'Laporan #' . $laporan->nomor_Helpdesk . ' ditandai belum selesai. Status dikembalikan ke tahap perbaikan.');
    }

    /**
     * Show the pegawai profile page.
     */
    public function profil(): View
    {
        $user = auth()->user();

        return view('pegawai.profil_pegawai', compact('user'));
    }

    /**
     * Update the pegawai profile (personal info, photo, and password).
     */
    public function updateProfil(Request $request): RedirectResponse
    {
        $user = auth()->user();

        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:150'],
            'jabatan_departemen' => ['nullable', 'string', 'max:150'],
            'email' => ['nullable', 'email', 'max:100', 'unique:user,email,'.$user->user_id.',user_id'],
            'foto_profil' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'email.unique' => 'Email sudah terdaftar di sistem.',
            'foto_profil.image' => 'File harus berupa gambar.',
            'foto_profil.mimes' => 'Foto profil harus berformat jpg, jpeg, png, atau webp.',
            'foto_profil.max' => 'Ukuran foto profil maksimal 2MB.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        $data = [
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jabatan_departemen' => $request->input('jabatan_departemen'),
            'email' => $request->input('email'),
        ];

        // Update foto profil jika user mengunggah file baru
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = time().'_'.uniqid().'.'.$file->extension();
            $file->move(public_path('simpan_foto'), $filename);
            $data['foto_profil'] = 'simpan_foto/'.$filename;
        }

        // Update password jika user mengisi password baru
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        $user->update($data);

        return redirect()->route('pegawai.profil')
            ->with('success', 'Profil berhasil diperbarui.');
    }
}

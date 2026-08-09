<?php

namespace App\Http\Controllers;

use App\Models\Helpdesk;
use Illuminate\View\View;

class VerifikasiAdminController extends Controller
{
    /**
     * Tampilkan halaman verifikasi keabsahan dokumen admin.
     * Hanya laporan yang berstatus Completed dan sudah diverifikasi (Valid) yang ditampilkan.
* Menampilkan nama admin (penyetuju) yang menyelesaikan laporan.
     */
    public function show(string $nomor): View
    {
        $laporan = Helpdesk::with([
            'pelapor',
            'persetujuanDigital' => function ($q) {
                $q->where('status_dokumen', 'Valid')
                    ->orderByDesc('waktu_persetujuan');
            },
            // Muat relasi penyetuju agar dapat ditampilkan (fallback)
            'persetujuanDigital.penyetuju',
            // Muat riwayat helpdesk untuk mendapatkan admin yang menangani
            // (id_pelapor pada riwayat menyimpan user_id admin yang mengajukan waiting approval / menyelesaikan masalah pelapor)
            'riwayat' => function ($q) {
                $q->orderByDesc('waktu_diselesaikan');
            },
            'riwayat.pelapor',
        ])
            ->where('nomor_Helpdesk', $nomor)
            ->where('status_Helpdesk', 'Completed')
            ->whereHas('persetujuanDigital', function ($q) {
                $q->where('status_dokumen', 'Valid');
            })
            ->first();

        abort_if(! $laporan, 404, 'Dokumen tidak ditemukan atau belum terverifikasi.');

        return view('verifikasi_admin', compact('laporan'));
    }
}

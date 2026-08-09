<?php

namespace App\Http\Controllers;

use App\Models\Helpdesk;
use Illuminate\View\View;

class VerifikasiTtdController extends Controller
{
    /**
     * Tampilkan halaman verifikasi keabsahan dokumen.
     * Hanya laporan yang berstatus Completed dan sudah diverifikasi (Valid) yang ditampilkan.
     */
    public function show(string $nomor): View
    {
        $laporan = Helpdesk::with(['pelapor', 'persetujuanDigital' => function ($q) {
            $q->where('status_dokumen', 'Valid')
                ->orderByDesc('waktu_persetujuan');
        }])
            ->where('nomor_Helpdesk', $nomor)
            ->where('status_Helpdesk', 'Completed')
            ->whereHas('persetujuanDigital', function ($q) {
                $q->where('status_dokumen', 'Valid');
            })
            ->first();

        abort_if(! $laporan, 404, 'Dokumen tidak ditemukan atau belum terverifikasi.');

        return view('verifikasi_ttd', compact('laporan'));
    }
}

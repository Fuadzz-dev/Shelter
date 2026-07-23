<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Show the pegawai dashboard.
     */
    public function dashboard(): \Illuminate\View\View
    {
        return view('pegawai.dashboard');
    }

    /**
     * Show the laporan helpdesk page.
     */
    public function laporanHelpdesk(): \Illuminate\View\View
    {
        return view('pegawai.laporan_helpdesk');
    }
}


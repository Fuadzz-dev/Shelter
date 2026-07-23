<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin helpdesk management page.
     */
    public function helpdesk(): \Illuminate\View\View
    {
        return view('admin.helpdesk');
    }

    /**
     * Show the user management page.
     */
    public function manajemenPengguna(): \Illuminate\View\View
    {
        $pengguna = User::orderByDesc('created_at')->get();

        return view('admin.manajemen_pengguna', compact('pengguna'));
    }

    /**
     * Show the helpdesk history page.
     */
    public function riwayatHelpdesk(): \Illuminate\View\View
    {
        return view('admin.riwayat_helpdesk');
    }
}

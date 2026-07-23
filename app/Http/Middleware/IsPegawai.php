<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsPegawai
{
    /**
     * Handle an incoming request.
     * Allow users with role 'user' (pegawai) to proceed.
     * Admins are also allowed to access pegawai pages.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user()) {
            abort(403, 'Akses ditolak. Silakan login terlebih dahulu.');
        }

        if (! in_array($request->user()->role, ['user', 'admin'])) {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk halaman ini.');
        }

        return $next($request);
    }
}

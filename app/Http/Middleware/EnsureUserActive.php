<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserActive
{
    /**
     * Handle an incoming request.
     *
     * Jika user yang sedang login berstatus 'inactive' (akun di-suspend),
     * otomatis logout dan arahkan ke halaman sign-in.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && ($user->status ?? 'active') === 'inactive') {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('sign-in')
                ->withErrors(['username' => 'Akun Anda telah di-suspend. Silakan hubungi administrator.']);
        }

        return $next($request);
    }
}

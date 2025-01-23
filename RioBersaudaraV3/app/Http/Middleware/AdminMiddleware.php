<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors([
                'error' => 'Anda harus login terlebih dahulu untuk mengakses halaman ini.',
            ]);
        }

        // Cek apakah pengguna memiliki role 'admin'
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('login')->withErrors([
                'error' => 'Anda tidak memiliki izin untuk mengakses halaman ini.',
            ]);
        }

        // Jika lolos semua pengecekan, izinkan akses
        return $next($request);
    }
}

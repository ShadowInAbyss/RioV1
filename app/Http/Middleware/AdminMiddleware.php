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
    if (!Auth::check()) {
        return redirect()->route('login')->withErrors(['error' => 'Anda harus login terlebih dahulu.']);
    }

    if (Auth::user()->role !== 'admin') {
        return redirect()->route('landing')->withErrors(['error' => 'Anda tidak memiliki izin untuk mengakses halaman ini.']);
    }

    return $next($request);
}

}

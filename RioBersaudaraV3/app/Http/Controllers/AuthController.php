<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Fungsi untuk menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Fungsi untuk melakukan autentikasi pengguna
    public function authenticate(Request $request)
{
    // Validasi data login
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Cari pengguna berdasarkan username
    $user = User::where('username', $request->username)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        // Jika username dan password benar, lakukan login
        Auth::login($user);

        // Redirect berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('admin.index'); // Rute dashboard untuk admin
        } elseif ($user->role === 'user') {
            return redirect()->route('user.index'); // Rute utama untuk user
        }
    }

    // Jika login gagal, beri pesan kesalahan
    return redirect()->route('login')->withErrors(['error' => 'Username atau password salah. Silakan coba lagi.']);
}

    // Fungsi untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

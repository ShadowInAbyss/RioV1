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
            return redirect()->route('admin.dashboard'); // Sesuaikan jika login berhasil
        }

        // Jika login gagal, beri pesan kesalahan yang lebih menarik
        return redirect()->route('login')->withErrors(['error' => 'Username atau password nya salah. Silakan coba lagi.']);
    }

    // Fungsi untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

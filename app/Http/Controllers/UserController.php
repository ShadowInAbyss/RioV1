<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pemesanan()
    {
        return view('user.pemesanan'); // Menampilkan halaman pemesanan
    }

    public function profile()
    {
        return view('user.profile'); // Menampilkan profil pengguna
    }
}

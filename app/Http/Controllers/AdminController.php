<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard'); // Menampilkan dashboard admin
    }

    public function laporan()
    {
        return view('admin.laporan'); // Menampilkan laporan
    }

    public function profile()
    {
        return view('admin.profile'); // Menampilkan profil admin
    }

    public function tables()
    {
        return view('admin.tables'); // Menampilkan tabel
    }
}

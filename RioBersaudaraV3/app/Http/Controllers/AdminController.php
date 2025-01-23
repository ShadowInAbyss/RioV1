<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index'); // Halaman dashboard admin
    }

    public function dashboard()
    {
        return view('admin.dashboard'); // Halaman dashboard
    }

    public function laporan()
    {
        return view('admin.laporan'); // Halaman laporan
    }

    public function profile()
    {
        return view('admin.profile'); // Halaman profil admin
    }

    // Menambahkan metode untuk halaman tabel
    public function tables()
    {
        return view('admin.tables'); // Pastikan ada file admin/tables.blade.php
    }

    // Menangani produk yang dipilih
    public function produk($produk)
    {
        $produkFile = resource_path("views/admin/produk/{$produk}.blade.php");

        // Cek apakah file produk ada di direktori
        if (file_exists($produkFile)) {
            return view("admin.produk.{$produk}");
        } else {
            return redirect()->route('admin.tables')->with('error', 'Produk tidak ditemukan.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('index'); // Menampilkan halaman index
    }

    public function showLandingPage()
    {
        return view('landing'); // Menampilkan halaman landing page
    }
}

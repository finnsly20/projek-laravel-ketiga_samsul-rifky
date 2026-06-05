<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // Fungsi untuk halaman About
    public function about()
    {
        return view('about');
    }

    // Fungsi untuk halaman Contact
    public function contact()
    {
        return view('contact');
    }
}
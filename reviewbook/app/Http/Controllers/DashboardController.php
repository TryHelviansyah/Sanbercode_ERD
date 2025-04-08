<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Kode untuk menampilkan halaman home
        return view('home');
    }
}

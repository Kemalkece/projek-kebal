<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teknisi;
use App\Models\Artikel; // Tambahkan ini

class TeknisiController extends Controller
{
    public function index()
    {
        $teknisis = Teknisi::all(); // Asumsi ini sudah ada
        $artikels = Artikel::latest()->get(); // Tambahkan ini

        return view('home', compact('teknisis', 'artikels')); // Kirim keduanya
    }
}
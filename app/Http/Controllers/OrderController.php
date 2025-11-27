<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder; 
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($paket)
    {
         return view('halaman.order' , ['paket' => $paket]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'paket' => 'required|string',
        ]);

      
        ServiceOrder::create([
            'nama' => $validated['nama'],
            'telepon' => $validated['telepon'],
            'paket' => $validated['paket'],
        ]);

        return redirect('/')->with('success', 'Pesanan berhasil dikirim!');
    }
}

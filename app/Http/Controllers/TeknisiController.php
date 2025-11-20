<?php

namespace App\Http\Controllers;
use App\Models\Teknisi;

use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    public function index()
    {
        $teknisis = Teknisi::all();
        return view('home', compact('teknisis'));
    }
}

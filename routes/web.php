<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeknisiController;


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/price', function () {
//     return view('halaman.price');
// });

Route::get('/', [TeknisiController::class, 'index'])->name('teknisi.index');

Route::get('/artikel', [TeknisiController::class, 'index'])->name('artikel.index');


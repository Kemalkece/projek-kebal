<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\OrderController;


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/price', function () {
//     return view('halaman.price');
// });

Route::get('/', [TeknisiController::class, 'index'])->name('teknisi.index');

Route::get('/artikel', [TeknisiController::class, 'index'])->name('artikel.index');

Route::get('/order/{paket}', [OrderController::class, 'index'])->name('order.form');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');



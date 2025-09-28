<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {return 'Halo Khaira, ini Laravel pertama kamu!';});
Route::get('/about', function () {return view('about');});
// Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/berita', function () {return view('berita');});
Route::get('/', function () {return view('home');})->name('home'); // <--- TAMBAHKAN INI

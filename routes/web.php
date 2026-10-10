<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/buku', [BukuController::class, 'index']);
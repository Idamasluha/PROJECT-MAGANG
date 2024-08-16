<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Rute untuk halaman beranda
Route::get('/', [HomeController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DataInputController;

Route::get('/data-input', [DataInputController::class, 'showForm'])->name('data-input');
Route::post('/data-input', [DataInputController::class, 'storeData']);

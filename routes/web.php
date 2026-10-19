<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

// Halaman utama
Route::get('/', [HomeController::class, 'index']);

// Halaman home
Route::get('/home', [HomeController::class, 'index']);

// Menampilkan data mahasiswa
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Memproses form pertanyaan
Route::post('/pertanyaan', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('/home-question-respon', function () {
    return view('home-question-respon');
})->name('home-question-respon');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

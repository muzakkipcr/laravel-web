<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
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
=======

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\QuestionController;

use App\Http\Controllers\DashboardController;

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/', function () {
return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::post('/question/store', [HomeController::class, 'store'])->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
>>>>>>> 5c211815a167eb8adb30eac4f9061f571e00a4a8

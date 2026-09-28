<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
    return 'Halo Mahasiswa';


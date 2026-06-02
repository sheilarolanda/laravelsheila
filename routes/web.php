<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fakultas', FakultasController::class)->parameters(['fakultas' => 'fakultas']);;
Route::resource('periode', PeriodeController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('mahasiswa', MahasiswaController::class);
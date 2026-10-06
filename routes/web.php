<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;

Route::get('/lapor-banjir', [LaporanBanjirController::class, 'index'])
    ->name('laporan.form');

Route::post('/lapor-banjir', [LaporanBanjirController::class, 'proses'])
    ->name('laporan.proses');

Route::get('/daftar-laporan', [LaporanBanjirController::class, 'daftar'])
    ->name('laporan.daftar');
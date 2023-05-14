<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\MobilController;
use App\http\Controllers\landing\DetailMobilController;
use App\http\Controllers\landing\TransaksiController;


use App\http\Controllers\Dashboard\DashboardController;
use App\http\Controllers\Dashboard\UsersController;
use App\http\Controllers\Dashboard\KendaraanController;
use App\http\Controllers\Dashboard\PemesananController;
use App\http\Controllers\Dashboard\JadwalController;


#LANDING PAGE
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/daftar-kendaraan', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/daftar-mobil', [DetailMobilController::class, 'index'])->name('detail-mobil.index');
Route::get('/detail/{mobil}', [MobilController::class, 'mobilDetail']);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');




#DASHBOARD PAGE

// HOME
Route::get('/dashboard', [DashboardController::class, 'index'])->name('.index');

// USERS
Route::get('/users', [UsersController::class, 'index']);
Route::post('/add-users', [UsersController::class, 'store']);

// KENDARAAN
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/tambah-kendaraan', [KendaraanController::class, 'insert']);
Route::post('/add-kendaraan', [KendaraanController::class, 'store']);

// KENDARAAN
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/tambah-pemesanan', [PemesananController::class, 'insert']);

// JADWAL
Route::get('/jadwal', [JadwalController::class, 'index']);








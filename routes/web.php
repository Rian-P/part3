<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\MobilController;
use App\http\Controllers\landing\DetailMobilController;
use App\http\Controllers\landing\TransaksiController;

//dashboard
// use App\http\Controllers\Dashboard\IndexController;
// use App\http\Controllers\Dashboard\DataUserController;
// use App\http\Controllers\Dashboard\DataKendaraanController;
// use App\http\Controllers\Dashboard\DataPemesananController;
// use App\http\Controllers\Dashboard\DataPenjadwalanController;
// use App\http\Controllers\Dashboard\DashboardController;
// use App\http\Controllers\Dashboard\DataSopirController;
use App\http\Controllers\Dashboard\DashboardController;











/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/pilihanmobil', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/detail-mobil', [DetailMobilController::class, 'index'])->name('detail-mobil.index');
Route::get('/detail/{mobil}', [MobilController::class, 'mobilDetail']);


//mobil
// Route::get('/datakendaraan', [DashboardController::class, 'index'])->name('datakendaraan.index');
// Route::post('/datakendaraan/createmobil', [DatakendaraanController::class, 'store'])->name('datakendaraan.store');
// Route::get('/datakendaraan/hapus/{id}', [DatakendaraanController::class, 'hapus'])->name('hapus');
// Route::post('/datakendaraan/update/{id}', [DatakendaraanController::class, 'update'])->name('datakendaraan.update');
// Route::get('/datakendaraaan/edit/', [DatakendaraanController::class, 'edit'])->name('edit');

//pemesanan
// Route::get('/datapemesanan', [DashboardController::class, 'index'])->name('pemesanan.index');
// Route::post('/datapemesanan/createpemesanan', [DataPemesananController::class, 'store'])->name('datapemesanan.store');
// Route::get('/datapemesanan/hapus/{id}', [DataPemesananController::class, 'hapus'])->name('hapus');
// Route::post('/datapemesanan/update/{id}', [DataPemesananController::class, 'update'])->name('datapemesanan.update');
// Route::get('/datapemesanan/edit/', [DataPemesananController::class, 'edit'])->name('edit');

//sopir
// Route::get('/datasopir', [DataSopirController::class, 'index'])->name('datasopir.index');
// Route::post('/store', [DataSopirController::class, 'store']);
// Route::get('/datasopir/edit/', [DataSopirController::class, 'edit'])->name('edit');
// Route::post('/datasopir/update/{id}', [DataSopirController::class, 'update'])->name('datasopir.update');
// Route::get('/datasopir/hapus/{id}', [DataSopirController::class, 'hapus'])->name('hapus');





// Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('.index');
// Route::get('/datauser', [DataUserController::class, 'index'])->name('datauser.index');
// Route::get('/datakendaraan', [DataKendaraanController::class, 'index'])->name('datakendaraan.index');
// Route::get('/dataPemesanan', [DataPemesananController::class, 'index'])->name('dataPemesanan.index');
// Route::get('/datapenjadwalan', [DataPenjadwalanController::class, 'index'])->name('datapenjadwalan.index');
// Route::get('/datadashboard', [DashboardController::class, 'index'])->name('datadashboard.index');



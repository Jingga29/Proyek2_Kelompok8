<?php

use App\Http\Controllers\BOPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\laba_bulananController;
use App\Http\Controllers\laba_tahunanController;
use App\Http\Controllers\laporan_harian_panenController;
use App\Http\Controllers\laporan_laba_rugi_harianController;
use App\Http\Controllers\nota_pembelianController;
use App\Http\Controllers\nota_penjualanController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/laporan_harian_panen', [laporan_harian_panenController::class, 'index']);
Route::resource('laporan_harian_panen', laporan_harian_panenController::class);
//Route::get('/nota_pembelian', [nota_pembelianController::class, 'index']);
//Route::get('/nota_penjualan', [nota_penjualanController::class, 'index']);
//Route::get('/BOP', [BOPController::class, 'index']);
//Route::get('/nota_pembelian', [nota_pembelianController::class]);
//Route::get('/dashboard/create', [DashboardController::class, 'create']);
Route::resource('nota_penjualan', nota_penjualanController::class);
Route::resource('nota_pembelian', nota_pembelianController::class);
Route::resource('BOP', BOPController::class);
Route::resource('laporan_laba_rugi_harian', laporan_laba_rugi_harianController::class);
Route::resource('laba_bulanan', laba_bulananController::class);
Route::resource('laba_tahunan', laba_tahunanController::class);





//Route::get('/laporan-harian-panen', [LaporanHarianPanenController::class, 'index']);
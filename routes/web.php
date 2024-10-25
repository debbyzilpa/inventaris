<?php

use App\Http\Controllers\InventarisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\KerusakanAlatController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\StokBahanController;
use App\Http\Controllers\JumlahLaboratoriumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inventaris', InventarisController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('perbaikan', PerbaikanController::class);
Route::resource('kerusakan_alat', KerusakanAlatController::class);
Route::resource('pengembalian', PengembalianController::class);
Route::resource('stok_bahan', StokBahanController::class);
Route::resource('jumlah_laboratorium', JumlahLaboratoriumController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ListBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------------laskar-pelangi-----------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// middleware guest artinya hanya bisa diakses oleh user yang belum ter-authentication
// middleware auth artinya hanya bisa diakses oleh user yang sudah ter-authentication
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::POST('/login', [LoginController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::POST('/register', [RegisterController::class, 'store']);    
}); 

Route::get('/barang/kategori/{slug}', [ListBarangController::class, 'index'])->name('listBarang');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/homeAdmin', [AdminController::class, 'index']);
    
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barangCreate');
    Route::POST('/barang/create', [BarangController::class, 'store'])->name('barangStore');
    Route::POST('/barang/update', [BarangController::class, 'update'])->name('barangUpdate');
    Route::get('/barang/show/{id}', [BarangController::class, 'show']);
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barangEdit');
    Route::get('/barang/hapus/{id}', [BarangController::class, 'destroy'])->name('barangDestroy');
    
    Route::get('/gudang', [GudangController::class, 'index'])->name('gudang');
    Route::get('/gudang/create', [GudangController::class, 'create'])->name('gudangCreate');
    Route::POST('/gudang/create', [GudangController::class, 'store'])->name('gudangStore');
    Route::POST('/gudang/update', [GudangController::class, 'update'])->name('gudangUpdate');
    Route::get('/gudang/edit/{id}', [GudangController::class, 'edit'])->name('gudangEdit');
    Route::get('/gudang/hapus/{id}', [GudangController::class, 'destroy'])->name('gudangDestroy');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategoriCreate');
    Route::POST('/kategori/create', [KategoriController::class, 'store'])->name('kategoriStore');
    Route::POST('/kategori/update', [KategoriController::class, 'update'])->name('kategoriUpdate');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategoriEdit');
    Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy'])->name('kategoriDestroy');

    Route::get('/barang/{slug}', [TransaksiController::class, 'index'])->name('transaksi');


});

Route::get('/', [HomeController::class, 'index']);
Route::POST('/logout', [LoginController::class, 'logout']);



<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function() {
Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    Route::get('/produk/detail/{id}', [ProdukController::class, 'show']);

    Route::get('/jenisproduk', [JenisProdukController::class, 'index']);
    Route::get('/jenisproduk/create', [JenisProdukController::class, 'create']);
    Route::post('/jenisproduk/store', [JenisProdukController::class, 'store']);
    Route::get('/jenisproduk/delete/{id}', [JenisProdukController::class, 'destroy']);
    Route::get('/jenisproduk/detail/{id}', [JenisProdukController::class, 'show']);

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/detail/{id}', [PesananController::class, 'show']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

    Route::get('/pembelian', [PembelianController::class, 'index']);
    Route::get('/pembelian/create', [PembelianController::class, 'create']);
    Route::post('/pembelian/store', [PembelianController::class, 'store']);
    Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
    Route::post('/pembelian/update/{id}', [PembelianController::class, 'update']);
    Route::get('/pembelian/delete/{id}', [PembelianController::class, 'destroy']);
    Route::get('/pembelian/detail/{id}', [PembelianController::class, 'show']);

    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/pelanggan/create', [PelangganController::class, 'create']);
    Route::post('/pelanggan/store', [PelangganController::class, 'store']);
    Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
    Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update']);
    Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);
    Route::get('/pelanggan/detail/{id}', [PelangganController::class, 'show']);
    
    Route::get('/logout', [DashboardController::class, 'logout']);
});
});

// route frontend
Route::prefix('user')->group(function() {
    Route::get('/dashboard',[FrontendController::class,'index']);
    Route::get('/login', [FrontendController::class, 'login']);
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

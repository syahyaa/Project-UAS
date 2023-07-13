<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
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


// For landing page(Tampilan frontend)
// Homecontroller menampung syntax untuk frontend dan di tampilkan di welcome(tampilan sebelum login) & landing(tanpilan sesudah login)
Route::get('/',[HomeController::class, 'index']);
Route::get('/landing',[HomeController::class, 'landing'])->middleware('auth');


// for authentication
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'peran:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/jenisproduk', [JenisProdukController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pembelian', [PembelianController::class, 'index']);
    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

});

<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Pelanggan;
use App\Models\Pembelian;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $totalproduk = Produk::count();
        $totaljenisproduk = JenisProduk::count();
        $totalpesanan = Pesanan::count();
        $totalpelanggan = Pelanggan::count();
        $totalpembelian = Pembelian::count();
        return view('admin.dashboard',compact('totalproduk', 'totaljenisproduk', 'totalpesanan', 'totalpelanggan', 'totalpembelian'));
    }
    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }
}

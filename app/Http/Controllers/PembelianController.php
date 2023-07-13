<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelian = new Pembelian();
        return view('admin.pembelian.pembelian', ['pembelian' => $pembelian->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan seluruh data produk
        $produk = Produk::all();

        // menampilkan seluruh data pembelian 
        $pembelian = Pembelian::all();
        return view('admin.pembelian.create', compact('produk', 'pembelian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //membuat class dengan nama table yang mau kita tambahkan datanya
        $pembelian = new Pembelian();

        // ambil data yang diinputkan user ke dalam parameter request
        // lalu masukan ke dalam variable table (pembelian)
        $pembelian->tanggal = $request->tanggal;
        $pembelian->nomor_pembelian = $request->nomor_pembelian;
        $pembelian->produk_id = $request->produk_id;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->harga = $request->harga;

        // lalu simpan ke dalam menggunakan method save
        $pembelian->save();

        // dan kembalikan ke dalam tampilan pembelian
        return redirect('admin/pembelian');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelian = Pembelian::find($id);
        return view('admin.pembelian.detail', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pembelian = DB::table('pembelian')->where('id', $id)->get();
        return view('admin.pembelian.edit', compact('produk', 'pembelian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat class dengan nama table yang mau kits edit datanya
        $pembelian = Pembelian::find($request->id);
        // ambil data yang diinputkan user menggunakan method request
        // kemudian masukan ke dalam variable pembelian 
        $pembelian->tanggal = $request->tanggal;
        $pembelian->nomor_pembelian = $request->nomor_pembelian;
        $pembelian->produk_id = $request->produk_id;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->harga = $request->harga;

        // lalu simpan menggunakan method save
        $pembelian->save();

        // kemudian kembalikan ke tampilan pembelian
        return redirect('admin/pembelian');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //buka table produk
        // cari data yang ingin dihapus berdasarkan id
        // hapus data menggunakan method delete
        DB::table('pembelian')->where('id', $id)->delete();
        // kemudian kembalikan ke tampilan pembelian
        return redirect('admin/pembelian');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk'  => $produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan seluruh data jenis produk
        $jenis_produk = JenisProduk::all();

        // menampilkan seluruh data produk
        $produk = Produk::all();
        return view('admin.produk.create', compact('jenis_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat class dengan nama table yang mau kita tambahkan datanya
        $produk = new Produk();

        // ambill data yang diinputkan user ke dalam parameter request
        // lalu masukan ke dalam kolom table (produk)
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_beli = $request->harga_beli;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->jenis_produk_id = $request->jenis_produk_id;

        // kemudian save data inputan user menggunakan method save
        $produk->save();

        // lalu kembalikan ke tampilan produk setelah user mengklik simpan
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.detail', compact('produk'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis_produk = DB::table('jenis_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('produk', 'jenis_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat class dengan nama table yang mau ita tambahkan datanya (produk)
        $produk = Produk::find($request->id);

        // ambil data yang diinputkan user dengan parameter request
        // lalu masukan dalam variable produk
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_beli = $request->harga_beli;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->jenis_produk_id = $request->jenis_produk_id;

        // save data inoutan user menggunakan method save
        $produk->save();

        // lalu kembalikan ke tampilan produk setelah user mengklik simpan
        return redirect('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table produk
        // cari data yang ingin dihapus berdasarkan id
        // hapus data menggunakan method delete
        DB::table('produk')->where('id', $id)->delete();
        // kembalikan ke tampilan produk
        return redirect('admin/produk');
    }
}

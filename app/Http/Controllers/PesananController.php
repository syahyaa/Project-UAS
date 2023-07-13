<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan seluruh data pelanggan
        $pelanggan = Pelanggan::all();

        // menampilkan seluruh data pesanan
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', compact('pelanggan', 'pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat class dengan nama table yang mau ita tambahkan datanya
        $pesanan = new Pesanan();

        // ambil data yang diinputkan user ke dalam parameter request
        // kemudian mesukan ke dalam kolom table (pesanan)
        $pesanan->tanggal = $request->tanggal;
        $pesanan->total = $request->total;
        $pesanan->pelanggan_id = $request->pelanggan_id;

        // kemudian save data inputan user menggunakan mwthod save
        $pesanan->save();

        // lalu kembalikan ke tampilan pesanan
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);

        $pesanan = Pesanan::find($id);

        return view('admin.pesanan.detail', compact('pelanggan','pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = DB::table('pelanggan')->get();
        $pesanan = DB::table('pesanan')->get();
        return view('admin.pesanan.edit', compact('pelanggan', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //BUAT class dengan nama table yang mau kita tambahkan datanya (pesanan)
        $pesanan = Pesanan::find($request->id);

        // ambil data yang diinputkan user menggunakan method request
        // kemudian masukan ke dalam variable pesanan
        $pesanan->tanggal = $request->tanggal;
        $pesanan->total = $request->total;
        $pesanan->pelanggan_id = $request->pelanggan_id;

        // lalu simpan menggunakan method save
        $pesanan->save();

        // kemudian kembalikan ke tampilan pesanan 
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table pesanan
        // cari data yang ingin dihapus berdasarkan id
        // hapus data menggunakan method delete
        DB::table('pesanan')->where('id', $id)->delete();
        // kembalikan ke tampilan produk
        return redirect('admin/pesanan');
    }
}

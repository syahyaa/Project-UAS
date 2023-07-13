<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_produk = new JenisProduk();
        return view('admin.jenis_produk.jenis_produk', ['jenis_produk' => $jenis_produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan seluruh data jenis produk
        $jenis_produk = JenisProduk::all();
        return view('admin/jenis_produk/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat class dengan nama table yang mau kita tambahkan datanya
        $jenis_produk = new JenisProduk();

        // ambil data yang diinputkan oleh user ke dalam parameter request
        // kemudian simpan dalam variable
        $jenis_produk->nama = $request->nama;

        // kemudian simpan menggunakan method request
        $jenis_produk->save();
        //  kemudian kembalikan ke tampilan jenis produk
        return redirect('admin/jenisproduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis_produk = JenisProduk::find($id);
        return view('admin.jenis_produk.detail', compact('jenis_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table jenis produk
        // cari data yang akan dihapus berdasarkan id
        // hapus data menggunakan method delete
        DB::table('jenis_produk')->where('id', $id)->delete();
        return redirect('admin/jenisproduk');
    }
}

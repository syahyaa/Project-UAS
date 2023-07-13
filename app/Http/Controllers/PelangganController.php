<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
// use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pelanggan = new Pelanggan();
       return view('admin.pelanggan.pelanggan', ['pelanggan' => $pelanggan->getALLData()]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Menampilkan seluruh data pembelian
        // $pembelian = Pembelian::all();

        // menampilkan seluruh data pelanggan
        $pelanggan =  Pelanggan::all();
        return view('admin.pelanggan.create', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat class dengan nama table yg mau ditambahin datanya
        $pelanggan = new Pelanggan();

        // ambil data yang diinputkan user ke dalam parameter request
        // lalu masukan ke dalam variable (pelanggan)
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        // $pelanggan->pembelian_id = $request->pembelian_id;

        // lalu simpan menggunakan method save
        $pelanggan->save();
        // lalu kembalikan ke tampilan pelanggan
        return redirect('admin/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('admin.pelanggan.detail', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = DB::table('pelanggan')->where('id', $id)->get();
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat class dengan nama table yg mau ditambahin datanya
        $pelanggan = Pelanggan::find($request->id);

        // ambil data yang diinputkan user ke dalam parameter request
        // lalu masukan ke dalam variable (pelanggan)
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        // $pelanggan->pembelian_id = $request->pembelian_id;

        // lalu simpan menggunakan method save
        $pelanggan->save();
        // lalu kembalikan ke tampilan pelanggan
        return redirect('admin/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pelanggan')->where('id', $id)->delete();
        return redirect('admin/pelanggan');
    }
}

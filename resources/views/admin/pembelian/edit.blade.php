@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
    <h1>Pembelian</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/produk') }}">Data Pembelian</a></li>
            <li class="breadcrumb-item active">Edit Data</li>
        </ol>
    </nav>
  </div>
    @foreach ($pembelian as $pem)
        <hr>
        <form method="POST" action="{{ url('admin/pembelian/update/' . $pem->id) }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" value="{{ $pem->tanggal }}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_pembelian" class="col-4 col-form-label">Nomor Pembelian</label>
                <div class="col-8">
                    <input id="nomor_pembelian" name="nomor_pembelian" value="{{ $pem->nomor_pembelian }}" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">Nama Produk</label>
                <div class="col-8">
                    <select id="produk_id" name="produk_id" class="custom-select">
                        @foreach ($produk as $prod)
                            <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah Pembelian</label>
                <div class="col-8">
                    <input id="jumlah" name="jumlah" value="{{ $pem->jumlah }}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Total Harga</label>
                <div class="col-8">
                    <input id="harga" name="harga" value="{{ $pem->harga }}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection

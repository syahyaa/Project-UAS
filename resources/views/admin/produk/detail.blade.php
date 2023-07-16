@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
    <h1>Produk</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin/produk')}}">Data Produk</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Detail Produk
    </div>
        
    <div class="card-body">
        <ul>
            <li>ID : {{$produk->id}}</li>
            <li>Kode : {{$produk->kode}}</li>
            <li>Nama : {{$produk->nama}}</li>
            <li>Harga Beli : {{$produk->harga_beli}}</li>
            <li>Harga Jual : {{$produk->harga_jual}}</li>
            <li>Stok : {{$produk->stok}}</li>
            <li>Minimal Stok : {{$produk->min_stok}}</li>
            {{-- <li>Jenis Produk : {{$produk->jenis_produk_id}}</li> --}}
        </ul>
        
    </div>
   
@endsection
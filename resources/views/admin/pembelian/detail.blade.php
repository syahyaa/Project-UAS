@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
    <h1>Pembelian</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Pembelian</li>
        </ol>
    </nav>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pembelian
    </div>
        
    <div class="card-body">
        <ul>  
            <li>ID : {{$pembelian->id}}</li>
            <li>Tanggal : {{$pembelian->tanggal}}</li>
            <li>No Pembelian : {{$pembelian->nomor_pembelian}}</li>
            <li>Nama Produk : {{$pembelian->produk_id}}</li>
            <li>Jumlah : {{$pembelian->jumlah}}</li>
            <li>Harga : {{$pembelian->harga}}</li>
        </ul>
        
    </div>
   
@endsection

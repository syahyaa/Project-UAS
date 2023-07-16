@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
    <h1>Pesanan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin/pesanan')}}">Data Pesanan</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Detail Pesanan
    </div>
        
    <div class="card-body">
        <ul>
            <li>ID : {{$pesanan->id}}</li>
            <li>Tanggal Pemesanan : {{$pesanan->tanggal}}</li>
            <li>Total Pemesanan : {{$pesanan->total}}</li>
            {{-- <li>Nama Pemesan : {{$pesanan->pelanggan_id}}</li> --}}
        </ul>
    </div>
   
@endsection
@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
    <h1>Pelanggan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Pelanggan</li>
        </ol>
    </nav>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pelanggan
    </div>
        
    <div class="card-body">
        <ul>
            <li>ID : {{$pelanggan->id}}</li>
            <li>Nama Pelanggan: {{$pelanggan->nama}}</li>
            <li>Jenis Kelamin : {{$pelanggan->jk}}</li>
            <li>Tempat Lahir : {{$pelanggan->tmp_lahir}}</li>
            <li>Tanggal Lahir : {{$pelanggan->tgl_lahir}}</li>
            <li>Email : {{$pelanggan->email}}</li>
        </ul>
    </div>
@endsection
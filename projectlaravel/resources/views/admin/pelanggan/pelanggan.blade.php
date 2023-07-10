@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
{{-- @if (Auth::user()->role != 'pelanggan') --}}
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
        <div class="card-header">
            {{-- @if (Auth::user()->role == 'admin') --}}
                <a href="{{url('admin/kategoriproduk/create')}}" class="btn btn-primary">Tambah Pelanggan</a>
            {{-- @endif --}}
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Email</th>
                      <th>Nomor Pembelian</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    {{-- karena data yg ditampilkan dalam pelanggan controller adalah data array, maka untuk memanggil data array kita menggunakan foreach --}}
                    @foreach ($pelanggan as $pel)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $pel->nama }}</td>
                        <td>{{ $pel->jk }}</td>
                        <td>{{ $pel->tmp_lahir }}</td>
                        <td>{{ $pel->tgl_lahir }}</td>
                        <td>{{ $pel->email }}</td>
                        <td>{{ $pel->no_beli }}</td>
                        <td>
                            {{-- @if (Auth::user()->role == 'admin') --}}
                            <a href=" {{ url('/admin/produk/delete/' . $pel->id) }}">
                                <button type="button" class="btn btn-warning btn-sn" title="Edit Pelanggan">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                </button>
                            </a>
                             {{-- @endif --}}
                            <a href=" {{ url('/admin/kategoriproduk/delete/' . $pel->id) }}">
                                <button type="button" class="btn btn-danger btn-sn" title="hapus Pelanggan">
                                    <i class="fa-solid fa-trash-can fa-beat"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
{{-- @else
    @include('admin.access_denied')
@endif --}}
@endsection
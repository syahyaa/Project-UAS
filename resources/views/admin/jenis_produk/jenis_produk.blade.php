@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
{{-- @if (Auth::user()->role != 'pelanggan') --}}
<div class="pagetitle">
    <h1>Jenis Produk</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Data Jenis Produk</li>
        </ol>
    </nav>
</div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Jenis Produk
        </div>
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
                <a href="{{url('admin/jenisproduk/create')}}" class="btn btn-primary">Tambah Jenis Produk</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                      <th>Nama</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    {{-- karena data yg ditampilkan dalam produk controller adalah data array, maka untuk memanggil data array kita menggunakan foreach --}}
                    @foreach ($jenis_produk as $jenisprod)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $jenisprod->nama }}</td>
                        <td>
                        
                            
                            <a href=" {{ url('/admin/jenisproduk/detail/' . $jenisprod->id) }}">
                                <button type="button" class="btn btn-warning btn-sn" title="Detail Jenis Produk">
                                    <i class="fa-solid fa-eye fa-beat"></i>
                                </button>
                            </a>
                                @if (Auth::user()->role == 'admin')
                            <a href=" {{ url('/admin/jenisproduk/delete/' . $jenisprod->id) }}">
                                <button type="button" class="btn btn-danger btn-sn" title="hapus jenis produk">
                                    <i class="fa-solid fa-trash-can fa-beat"></i>
                                </button>
                            </a>
                            @endif
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
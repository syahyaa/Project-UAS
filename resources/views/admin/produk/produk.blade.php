@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}
{{-- extend merupakan perintah agar kita dapat menggunakan semua kode yang ada dalam file tersebut --}}

{{-- halaman dashboard merupakan anak dari parent --}}
@section('content')
    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Data Produk</li>
            </ol>
        </nav>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
        <div class="card-header">
            <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
        <div class="card-body overflow-hidden">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Min Stok</th>
                        <th>Jenis Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    {{-- karna data yang ditampilkan dalam produk controller adalah data array, maka untuk memanggilnya kita gunakan foreach --}}
                    @foreach ($produk as $prod)
                        <tr>
                            <td> {{ $no }} </td>
                            <td> {{ $prod->kode }} </td>
                            <td> {{ $prod->nama }} </td>
                            <td> {{ $prod->harga_beli }} </td>
                            <td> {{ $prod->harga_jual }} </td>
                            <td> {{ $prod->stok }} </td>
                            <td> {{ $prod->min_stok }} </td>
                            <td> {{ $prod->nama_jenis_produk }} </td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <a class="col-md-3" href=" {{ url('/admin/produk/detail/' . $prod->id) }}">
                                        <button type="button" class="btn btn-warning btn-sn" title="Detail Produk">
                                            <i class="fa-solid fa-eye fa-beat"></i>
                                        </button>
                                    </a>
                                    <a class="col-md-3" href=" {{ url('/admin/produk/edit/' . $prod->id) }}">
                                        <button type="button" class="btn btn-warning btn-sn" title="Edit Produk">
                                            <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                        </button>
                                    </a>
                                    <a class="col-md-3" href=" {{ url('/admin/produk/delete/' . $prod->id) }}">
                                        <button type="button" class="btn btn-danger btn-sn" title="hapus Produk">
                                            <i class="fa-solid fa-trash-can fa-beat"></i>
                                        </button>
                                    </a>
                                </div>
                                
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
    {{-- @if (Auth::user()->role != 'pelanggan') --}}
    <div class="pagetitle">
        <h1>Pembelian</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Pembelian</li>
            </ol>
        </nav>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pembelian
        </div>
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/pembelian/create') }}" class="btn btn-primary">Tambah Pembelian</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nomor Pembelian</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    {{-- karena data yg ditampilkan dalam produk controller adalah data array, maka untuk memanggil data array kita menggunakan foreach --}}
                    @foreach ($pembelian as $pem)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $pem->tanggal }}</td>
                            <td>{{ $pem->nomor_pembelian }}</td>
                            <td>{{ $pem->nama_produk }}</td>
                            <td>{{ $pem->jumlah }}</td>
                            <td>{{ $pem->harga }}</td>
                            <td>
                                <div class="row">
                                    
                                    <a class="col-md-4" href=" {{ url('/admin/pembelian/detail/' . $pem->id) }}">
                                        <button type="button" class="btn btn-warning btn-sn" title="Detail Pembelian">
                                            <i class="fa-solid fa-eye fa-beat"></i>
                                        </button>
                                    </a>
                                    <a class="col-md-4" href=" {{ url('/admin/pembelian/edit/' . $pem->id) }}">
                                        <button type="button" class="btn btn-warning btn-sn" title="Edit Pembelian">
                                            <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                        </button>
                                    </a>
                                    
                                    @if (Auth::user()->role == 'admin')
                                    <a class="col-md-4" href=" {{ url('/admin/pembelian/delete/' . $pem->id) }}">
                                        <button type="button" class="btn btn-danger btn-sn" title="hapus Pembelian">
                                            <i class="fa-solid fa-trash-can fa-beat"></i>
                                        </button>
                                    </a>
                                    @endif
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
    </div>

    {{-- @else
    @include('admin.access_denied')
@endif --}}
@endsection

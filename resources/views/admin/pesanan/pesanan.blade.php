@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
    {{-- @if (Auth::user()->role != 'pelanggan') --}}
    <div class="pagetitle">
        <h1>Pesanan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Pesanan</li>
            </ol>
        </nav>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Pesanan</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Total Pesanan</th>
                        <th>Nama Pemesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    {{-- karena data yg ditampilkan dalam produk controller adalah data array, maka untuk memanggil data array kita menggunakan foreach --}}
                    @foreach ($pesanan as $pes)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $pes->tanggal }}</td>
                            <td>{{ $pes->total }}</td>
                            <td>{{ $pes->nama_pelanggan }}</td>
                            <td>
                                <div class="row">
                                    
                                    <a class="col-md-4" href=" {{ url('/admin/pesanan/detail/' . $pes->id) }}">
                                        <button type="button" class="btn btn-warning btn-sn" title="Detail Pesanan">
                                            <i class="fa-solid fa-eye fa-beat"></i>
                                        </button>
                                    </a>
                                    <a class="col-md-4" href=" {{ url('/admin/pesanan/edit/' . $pes->id) }}">
                                        <button type="button" class="btn btn-warning btn-sn" title="Edit Pesanan">
                                            <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                        </button>
                                    </a>
                                    
                                    @if (Auth::user()->role == 'admin')
                                    <a class="col-md-4" href=" {{ url('/admin/pesanan/delete/' . $pes->id) }}">
                                        <button type="button" class="btn btn-danger btn-sn" title="hapus Pesanan">
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

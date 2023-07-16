@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
    <h1>Pesanan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/produk') }}">Data Pesanan</a></li>
            <li class="breadcrumb-item active">Edit Data</li>
        </ol>
    </nav>
  </div>
    @foreach ($pesanan as $pes)
        <hr>
        <form method="POST" action="{{ url('admin/pesanan/update/'. $pes->id) }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" value="{{$pes->tanggal}}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="total" class="col-4 col-form-label">Total</label>
                <div class="col-8">
                    <input id="total" name="total" value="{{$pes->total}}"type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan_id" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                    <select id="pelanggan_id" name="pelanggan_id" class="custom-select">
                        @foreach ($pelanggan as $pel)
                            <option value="{{ $pel->id }}">{{ $pel->nama }}</option>
                        @endforeach
                    </select>
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



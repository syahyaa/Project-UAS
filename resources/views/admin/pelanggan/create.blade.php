@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<div class="pagetitle">
  <h1>Pelanggan</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin/produk') }}">Data Pelanggan</a></li>
          <li class="breadcrumb-item active">Tambah Data</li>
      </ol>
  </nav>
</div>
    <hr>
    <form method="POST" action="{{url('admin/pelanggan/store')}}">
        {{ csrf_field() }}
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
          <div class="col-8">
            <input id="jk" name="jk" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
          <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
          <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">Email</label> 
          <div class="col-8">
            <input id="email" name="email" type="text" class="form-control">
          </div>
        </div>
        {{-- <div class="form-group row">
          <label for="nomor_pembelian" class="col-4 col-form-label">No Pembelian</label> 
          <div class="col-8">
            <select id="nomor_pembelian" name="nomor_pembelian" class="custom-select">
              @foreach ($pembelian as $pem)
                  <option value="{{$pem->id}}">{{$pem->nomor_pembelian}}</option>
              @endforeach
            </select>
          </div>
        </div>  --}}
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
@endsection

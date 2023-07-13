@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
@foreach ($pelanggan as $pel)
    
    <h1 style="text-align: center">Edit Data</h1>
    <hr>
    <form method="POST" action="{{url('admin/pelanggan/update/'.$pel->id)}}">
        {{ csrf_field() }}
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" value="{{$pel->nama}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
          <div class="col-8">
            <input id="jk" name="jk" value="{{$pel->jk}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
          <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" value="{{$pel->tmp_lahir}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
          <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" value="{{$pel->tgl_lahir}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">Email</label> 
          <div class="col-8">
            <input id="email" name="email" value="{{$pel->email}}" type="text" class="form-control">
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
@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
    <h1 style="text-align: center">Tambah Data</h1>
    <hr>
    <form method="post" action="{{url('admin/jenisproduk/store')}}">
        {{ csrf_field() }}
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
@endsection

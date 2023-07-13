@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
<h1 style="text-align: center" >Tambah Data</h1>
<hr>
<form method="POST" action="{{url('admin/pesanan/store')}}">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
      <div class="col-8">
        <input id="tanggal" name="tanggal" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="total" class="col-4 col-form-label">Total</label> 
      <div class="col-8">
        <input id="total" name="total" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="pelanggan_id" class="col-4 col-form-label">Select</label> 
      <div class="col-8">
        <select id="pelanggan_id" name="pelanggan_id" class="custom-select">
            @foreach ($pelanggan as $pel)
            <option value="{{$pel->id}}">{{$pel->nama}}</option>
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
@endsection

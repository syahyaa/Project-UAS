@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
@section('content')
    @foreach ($produk as $prod)
        <h1 style="text-align: center">Edit Data</h1>
        <hr>
        <form method="POST" action="{{ url('admin/produk/update/'. $prod->id) }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" value="{{$prod->kode}}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" value="{{$prod->nama}}"type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                    <input id="harga_beli" name="harga_beli" value="{{$prod->harga_beli}}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                <div class="col-8">
                    <input id="harga_jual" name="harga_jual" value="{{$prod->harga_jual}}" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                    <input id="stok" name="stok" value="{{$prod->stok}}"type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                <div class="col-8">
                    <input id="min_stok" name="min_stok" value="{{$prod->min_stok}}"type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_produk_id" class="col-4 col-form-label">Select</label>
                <div class="col-8">
                    <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                        @foreach ($jenis_produk as $jenisprod)
                            <option value="{{ $jenisprod->id }}">
                                {{ $jenisprod->nama }}</option>
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

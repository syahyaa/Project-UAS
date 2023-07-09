<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Produk extends Model
{
    use HasFactory;
    // panggil table
    protected $table = 'produk';

    public $timestamps = false;

    protected $primarykey = 'id';

    //  kolom yg bisa di isi
    protected $fillable = [
        'kode',
        'nama',
        'harga_beli',
        'harga_jual',
        'stok',
        'min_stok',
        'jenis_produk_id',
    ];

        // ini fungsi untuk menghubungkan ke model jenis produk
    public function jenis_produk(){
        return $this->belongTo(JenisProduk::class);
    }

    public function getALLData(){
         $alldata = DB::table('produk')->join('jenis_produk', 'produk.jenis_produk_id', '=', 'jenis_produk.id')->select('produk.*', 'jenis_produk.nama as nama_jenis_produk')->get();
         return $alldata;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    public $timestamps = false;

    protected $primarykey = 'id';

    protected $fillable = [
        'tanggal',
        'nomor_pembelian',
        'produk_id',
        'jumlah',
        'harga'
    ];

    // ini fungsi untuk menghubungkan ke model kategori  produk
    public function produk(){
        return $this->belongTo(Produk::class);
    }

    public function getALLData(){
        $alldata = DB::table('pembelian')
        ->join('produk', 'pembelian.produk_id', '=', 'produk.id')
        ->select('pembelian.*', 'produk.nama as nama_produk')
        ->get();
        return $alldata;
    }
}

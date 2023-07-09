<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;





class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'table';

    public $timestamps = false;

    protected $primarykey = 'id';

    protected $fillable = [
        'tanggal',
        'total',
        'pelanggan_id'
    ];  

    // funsi untuk menghubungkan ke model pelanggan
    public function pelanggan(){
        return $this->belongTo(Pelanggan::class);
    }
    
    public function getALLData(){
        $alldata = DB::table('pesanan')->join('pelanggan', 'pesanan.pelanggan_id', '=', 'pelanggan.id')->select('pesanan.*', 'pelanggan.nama as nama_pelanggan')->get();
        return $alldata;
    }
}

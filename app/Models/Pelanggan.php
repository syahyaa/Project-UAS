<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';

    public $timestamps = false;

    protected $primarykey = 'id';
     
    protected $fillable = [
        'nama',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'email',
        'pembelian_id'
    ];

    // public function pembelian(){
    //    return $this->belongTo(Pembelian::class); 
    // }

    public function getALLData(){
        $alldata = DB::table('pelanggan')->select('pelanggan.*')->get();
        return $alldata;
    }
}

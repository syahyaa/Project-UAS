<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class JenisProduk extends Model
{
    use HasFactory;

    protected $table = 'jenis_produk';

    public $timestamps = false;
    
    protected $primarykey = 'id';

    protected $fillable = [
        'nama',
    ];

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function getALLData(){
        $alldata = DB::table('jenis_produk')->select('jenis_produk.*')->get();
        return $alldata;
    }
}

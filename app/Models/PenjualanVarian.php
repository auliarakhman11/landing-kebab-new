<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanVarian extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'penjualan_varian';
    protected $fillable = ['no_invoice','penjualan_id','varian_id','qty','harga','tgl','created_at','updated_at'];

    public function getVarian()
    {
        return $this->belongsTo(Varian::class,'varian_id','id');
    }
}

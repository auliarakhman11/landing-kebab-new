<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanKasir extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'penjualan_kasir';
    protected $fillable = ['no_invoice','nm_costumer','produk_id','qty','harga','delivery_id','diskon','total','void','admin','cabang_id','kota_id','tgl','catatan','harga_normal','total_varian','pembayaran_id','online','created_at','updated_at'];

    public function getMenu()
    {
        return $this->belongsTo(Produk::class,'produk_id','id');
    }

    public function penjualanVarian()
    {
        return $this->hasMany(PenjualanVarian::class,'penjualan_id','id');
    }
}

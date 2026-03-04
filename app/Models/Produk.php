<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = ['kategori_id','nm_produk','foto','diskon','status'];

    public function getHarga()
    {
        return $this->hasMany(Harga::class,'produk_id','id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }

    public function resep()
    {
        return $this->hasMany(Resep::class,'produk_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $table = 'cabang';
    protected $fillable = ['nama','alamat','foto','map'];

    public function kota()
    {
        return $this->belongsTo(kota::class,'kota_id','id');
    }

}

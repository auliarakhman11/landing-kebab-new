<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanGaji extends Model
{
    use HasFactory;

    protected $table = 'penjualan_gaji';
    
    protected $fillable = ['buka_toko_id','kota_id','cabang_id','invoice_id','karyawan_id','jumlah','tgl','void','persen_gaji'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class,'karyawan_id','id');
    }
}

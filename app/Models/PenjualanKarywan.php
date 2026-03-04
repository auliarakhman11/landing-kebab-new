<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanKarywan extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'penjualan_karyawan';
    protected $fillable = ['no_invoice','karyawan_id','tgl','cabang_id','void','jml_komisi','online','created_at','updated_at'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class,'karyawan_id','id');
    }
}

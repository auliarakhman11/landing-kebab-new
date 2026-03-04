<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceKasir extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'invoice_kasir';
    protected $fillable = ['no_invoice','nm_costumer','dibayar','diskon','no_tlp','void','admin','tgl','cabang_id','kota_id','total','ket_void','delivery_id','pembayaran_id','kode','urutan','print','online','created_at','updated_at'];

    public function penjualan()
    {
        return $this->hasMany(PenjualanKasir::class,'no_invoice','no_invoice');
    }

    public function penjualanKaryawan()
    {
        return $this->hasMany(PenjualanKarywan::class,'no_invoice','no_invoice')->groupBy('karyawan_id');
    }

    public function cabang()
    {
        return $this->belongsTo(Cabang::class,'cabang_id','id');
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class,'delivery_id','id');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class,'pembayaran_id','id');
    }

    public function penjualanGaji()
    {
        return $this->hasMany(PenjualanGaji::class,'invoice_id','id');
    }
    
}

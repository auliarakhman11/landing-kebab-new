<?php

namespace App\Http\Controllers;

use App\Models\InvoiceKasir;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function printNota(Request $request)
    {
        $zona_waktu = date('Y-m-d H:i:s');

        $inv = $request->query('inv');
        $invoice = InvoiceKasir::where('invoice_kasir.no_invoice', $inv);

        $dt_invoice = $invoice->with(['penjualan', 'penjualan.getMenu', 'cabang', 'penjualan.penjualanVarian', 'penjualan.penjualanVarian.getVarian', 'penjualanKaryawan', 'penjualanKaryawan.karyawan', 'delivery', 'penjualanGaji.karyawan'])->first();


        if ($dt_invoice) {
            $data = [
                'dt_invoice' => $dt_invoice
            ];
            return view('penjualan.nota', $data);
        } else {
            return redirect(route('home'));
        }
    }
}

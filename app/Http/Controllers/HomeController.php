<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home.index', [
            'title' => 'Home',
            'terlaris' => Produk::select('produk.*', 'harga.harga')->leftJoin('harga', 'produk.id', '=', 'harga.produk_id')->where('harga.delivery_id', 1)->where('status', 'ON')->where('hapus', 0)->where('terlaris', 1)->groupBy('produk.id')->orderBy('possition', 'ASC')->get(),
            'kombo' => Produk::select('produk.*', 'harga.harga')->leftJoin('harga', 'produk.id', '=', 'harga.produk_id')->where('harga.delivery_id', 1)->where('status', 'ON')->where('hapus', 0)->where('kategori_id', 5)->where('harga.harga', '>=', 1)->groupBy('produk.id')->orderBy('possition', 'ASC')->get(),
        ]);
    }
}

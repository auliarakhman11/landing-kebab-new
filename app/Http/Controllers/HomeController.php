<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Promo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home.index', [
            'title' => 'Home',
            'hero' => Hero::all(),
            'terlaris' => Produk::select('produk.*', 'harga.harga')->leftJoin('harga', 'produk.id', '=', 'harga.produk_id')->where('harga.delivery_id', 1)->where('status', 'ON')->where('hapus', 0)->where('terlaris', 1)->groupBy('produk.id')->orderBy('possition', 'ASC')->get(),
            'kombo' => Produk::select('produk.*', 'harga.harga')->leftJoin('harga', 'produk.id', '=', 'harga.produk_id')->where('harga.delivery_id', 1)->where('status', 'ON')->where('hapus', 0)->where('kategori_id', 5)->where('harga.harga', '>=', 1)->groupBy('produk.id')->orderBy('possition', 'ASC')->get(),
            'promo' => Promo::all(),
            'menu' => Produk::select('produk.*', 'harga.harga')->leftJoin('harga', 'produk.id', '=', 'harga.produk_id')->where('harga.delivery_id', 1)->where('status', 'ON')->where('hapus', 0)->groupBy('produk.id')->orderBy('possition', 'ASC')->take(8)->get(),
        ]);
    }

    public function cotactUs()
    {
        return view('home.cotactUs', [
            'title' => 'Hubungi Kami',
        ]);
    }

    public function menu()
    {
        return view('home.menu', [
            'title' => 'Menu',
            'kategori' => Kategori::whereNotIn('id', [9, 10])->orderBy('possition', 'ASC')->get(),
            'menu' => Produk::select('produk.*', 'harga.harga')->leftJoin('harga', 'produk.id', '=', 'harga.produk_id')->where('harga.delivery_id', 1)->where('harga.harga', '>', 0)->where('status', 'ON')->where('hapus', 0)->whereNotIn('produk.kategori_id', [9, 10])->groupBy('produk.id')->orderBy('possition', 'ASC')->get(),
        ]);
    }
}

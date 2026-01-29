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
            'terlaris' => Produk::where('status', 'ON')->where('hapus', 0)->where('terlaris', 1)->orderBy('possition', 'ASC')->get(),
        ]);
    }
}

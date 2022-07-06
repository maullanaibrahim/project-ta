<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class goodsController extends Controller
{
    public function index()
    {
        return view('goods.index', [
            "title" => "Data Barang / Jasa",
            "barangs" => Barang::all()
        ]);
    }
}

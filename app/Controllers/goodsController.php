<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class goodsController extends Controller
{
    public function index()
    {
        return view('goods.index', [
            "title" => "Data Barang / Jasa"
        ]);
    }
}

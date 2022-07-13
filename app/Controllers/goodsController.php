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

    public function create()
    {
        return view('goods.create', [
            "title" => "Tambah Data Barang / Jasa",
            'goods' => Barang::latest('kode_barang')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required|max:100',
            'harga' => 'required|max:11',
            'satuan' => 'required',
            'jenis_barang' => 'required',
            'kategori' => 'required',
            'lead_time' => 'required'
        ]);
        Barang::create($validatedData);
        return redirect('/goods');
    }
}

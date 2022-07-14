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
            'goods' => Barang::all()->sortByDesc('kode_barang')->take(1)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required|max:100',
            'harga' => 'required|max:11',
            'satuan' => 'required',
            'jenis_barang' => 'required',
            'kategori' => 'required',
            'lead_time' => 'required'
        ]);
        Barang::create($validatedData);
        return redirect('/goods')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/goods')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Barang $barang)
    {
        return view('goods.edit', [
            "title" => "Edit Data Barang / Jasa",
            "barang" => $barang,
            "barangs" => Barang::all()
        ]);
    }

    public function update(Request $request, Barang $barang)
    {
        $rules = [
            'nama_barang' => 'required|max:100',
            'harga' => 'required|max:11',
            'satuan' => 'required',
            'jenis_barang' => 'required',
            'kategori' => 'required',
            'lead_time' => 'required'
        ];

        if($request->kode_barang != $barang->kode_barang){
            $rules['kode_barang'] = 'required|unique:barangs';
        }

        $validatedData = $request->validate($rules);

        Barang::where('id', $barang->id)
                ->update($validatedData);

        return redirect('/goods')->with('success', 'Data berhasil di Update!');
    }
}

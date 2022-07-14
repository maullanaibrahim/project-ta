<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class supplierController extends Controller
{
    public function index()
    {
        return view('supplier.index', [
            "title" => "Data Supplier",
            "suppliers" => Supplier::all()
        ]);
    }

    public function create()
    {
        return view('supplier.create', [
            "title" => "Tambah Data Supplier",
            'suppliers' => Supplier::all()->sortByDesc('kode_supplier')->take(1)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_supplier' => 'required|unique:suppliers',
            'nama_supplier' => 'required|max:100',
            'top' => 'required|max:7',
            'kontak' => 'required|max:50',
            'pic' => 'required',
            'alamat' => 'required'
        ]);
        Supplier::create($validatedData);
        return redirect('/supplier')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);
        return redirect('/supplier')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Supplier $supplier)
    {
        return view('supplier.edit', [
            "title" => "Edit Data Supplier",
            "supplier" => $supplier,
            "suppliers" => Supplier::all()
        ]);
    }

    public function update(Request $request, Supplier $supplier)
    {
        $rules = [
            'nama_supplier' => 'required|max:100',
            'top' => 'required|max:7',
            'kontak' => 'required|max:50',
            'pic' => 'required',
            'alamat' => 'required'
        ];

        if($request->kode_supplier != $supplier->kode_supplier){
            $rules['kode_supplier'] = 'required|unique:suppliers';
        }

        $validatedData = $request->validate($rules);

        Supplier::where('id', $supplier->id)
                ->update($validatedData);

        return redirect('/supplier')->with('success', 'Data berhasil di Update!');
    }
}

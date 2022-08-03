<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class branchController extends Controller
{
    public function index()
    {
        return view('branch.index', [
            "title" => "Data Lokasi",
            "locations" => Location::all()
        ]);
    }

    public function create()
    {
        return view('branch.create', [
            "title" => "Tambah Data Lokasi",
            'locations' => Location::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_lokasi' => 'required|max:3|unique:locations',
            'nama_lokasi' => 'required|max:100',
            'alamat_lokasi' => 'required|max:255',
            'regional' => 'required',
            'area' => 'required',
        ]);
        Location::create($validatedData);
        return redirect('/branch')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Location $location)
    {
        Location::destroy($location->id);
        return redirect('/branch')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Location $location)
    {
        return view('branch.edit', [
            "title" => "Edit Data Lokasi",
            "location" => $location,
            "locations" => Location::all()
        ]);
    }

    public function update(Request $request, Location $location)
    {
        $rules = [
            'nama_lokasi' => 'required|max:100',
            'regional' => 'required',
            'area' => 'required',
        ];

        if($request->kode_lokasi != $location->kode_lokasi){
            $rules['kode_lokasi'] = 'required|max:3|unique:locations';
        }

        $validatedData = $request->validate($rules);

        Location::where('id', $location->id)
                ->update($validatedData);

        return redirect('/branch')->with('success', 'Data berhasil di Update!');
    }
}

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
            'kode_lokasi' => 'required|max:3|unique',
            'nama_lokasi' => 'required|max:100',
            'alamat_lokasi' => 'required|max:255',
            'regional' => 'required',
            'area' => 'required',
        ]);
        Location::create($validatedData);
        return redirect('/branch');
    }
}

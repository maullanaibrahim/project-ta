<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppbj;
use App\Models\Ppbj_detail;
use App\Models\Ppbj_approval;
use App\Models\Karyawan;
use App\Models\Location;
use App\Models\Barang;

class ProsesPpbjController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $pilihBarang = $data['id'];
        $barang = Barang::whereBetween('id', $pilihBarang)->get();
        return view('purchase.create', [
            "title" => "Data Purchase Order"
        ], compact('barang'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppbj;
use App\Models\Ppbj_detail;
use App\Models\Karyawan;
use App\Models\Location;
use App\Models\Barang;

class ppbjController extends Controller
{
    public function index()
    {
        $data = Ppbj::all();
        return view('ppbj.index', [
            "data"  => $data,
            "title" => "Data PPBJe"
        ]);
    }

    public function show(Ppbj $id)
    {
        $data = $id;
        return view('ppbj.detail', ["title" => "PPBJe Detail"], compact('data'));
    }

    public function create()
    {
        return view('ppbj.create', [
            "title"     => "Buat PPBJe Baru",
            'karyawans' => Karyawan::all(),
            'locations' => Location::all(),
            'barangs'   => Barang::all()
        ]);
    }

    public function getPemohon($id = 0)
    {
        $data = Karyawan::where('id',$id)->first();
        return response()->json($data);
    }

    public function getBarang($id = 0)
    {
        $data = Barang::where('id',$id)->first();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // $ppbj = new Ppbj;
        // $ppbj->tgl_ppbj       = date('Y-m-d');
        // $ppbj->no_ppbj        = $data['no_ppbj'];
        // $ppbj->user_id        = $data['user_id'];
        // $ppbj->karyawan_id    = $data['pemohon'];
        // $ppbj->location_id    = $data['lokasi'];
        // $ppbj->alasan         = $data['alasan'];
        // $ppbj->tgl_kebutuhan  = $data['tgl_kebutuhan'];
        // $ppbj->alokasi        = $data['alokasi'];
        // $ppbj->save();
        
        // $detailppbj = new Ppbj_detail;
        $barang     = count($data['barang']);
        // $detailppbj->qty        = $data['qty'];
        // $detailppbj->save();

        if($barang > 0){
            foreach ($data['barang'] as $item => $value ){
                $data2 = array(
                    // 'ppbj_id'       => $ppbj->id,
                    'nama_barang'   => $data['barang'][$item],
                    'qty'           => $data['qty'][$item]
                );
                dd($data2);
                // Ppbj_detail::create($data2);
            }
        }
        return redirect()->route('ppbj.index');
    }

    public function update(Ppbj $id)
    {
        
    }

    public function destroy(Ppbj $id)
    {
        
    }
}
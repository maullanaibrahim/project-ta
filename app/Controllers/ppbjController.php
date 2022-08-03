<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppbj;
use App\Models\Ppbj_detail;
use App\Models\Ppbj_approval;
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
        $ppbj = new Ppbj;
        $ppbj->tgl_ppbj       = date('Y-m-d');
        $ppbj->no_ppbj        = $data['no_ppbj'];
        $ppbj->user_id        = $data['user_id'];
        $ppbj->karyawan_id    = $data['pemohon'];
        $ppbj->location_id    = $data['lokasi'];
        $ppbj->alasan         = $data['alasan'];
        $ppbj->tgl_kebutuhan  = $data['tgl_kebutuhan'];
        $ppbj->alokasi        = $data['alokasi'];
        $ppbj->save();
        
        $detailppbj = new Ppbj_detail;
        $barang     = count($data['barang_id']);

        if($barang > 0){
            foreach ($data['barang_id'] as $item => $value ){
                $data2 = array(
                    'ppbj_id'       => $ppbj['id'],
                    'barang_id'     => $data['barang_id'][$item],
                    'qty'           => $data['qty'][$item],
                );
                Ppbj_detail::create($data2);
            }
        }

        $approveppbj = new Ppbj_approval;
        $data3 = array(
            'ppbj_id'       => $ppbj['id']
        );
        Ppbj_approval::create($data3);

        return redirect()->route('ppbj.dash',$ppbj->id);
    }

    public function dashCreate(Ppbj $ppbj)
    {
        return view('ppbj.dashcreate', [
            "title"     => "Dashboard Create PPBJ",
            "ppbj" => $ppbj,
            "ppbjs" => Ppbj::all()
        ]);
    }

    public function update(Ppbj $id)
    {
        
    }

    public function destroy(Ppbj $id)
    {
        
    }
}
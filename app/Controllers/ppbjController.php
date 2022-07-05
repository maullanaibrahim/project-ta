<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppbj;

class ppbjController extends Controller
{
    public function index()
    {
        $data = Ppbj::all();
        return view('ppbj.index', [
            "data" => $data,
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
            "title" => "Buat PPBJe Baru"
        ]);
    }

    public function store(Request $request){
        $post = new Ppbj();
        $post->tgl_ppbj = $request->input('tgl_ppbj');
        $post->no_ppbj = $request->input('no_ppbj');
        $post->user_id = $request->input('user_id');
        $post->karyawan_id = $request->input('karyawan_id');
        $post->beban_biaya = $request->input('beban_biaya');
        $post->alasan = $request->input('alasan');
        $post->tgl_kebutuhan = $request->input('tgl_kebutuhan');
        $post->total_harga = $request->input('total_harga');
        $post->progress = $request->input('progress');
        $post->keterangan = $request->input('keterangan');
    
        $post->save();

        return redirect()->route('ppbj.index');
    }

    public function update(Ppbj $id)
    {
        
    }

    public function destroy(Ppbj $id)
    {
        
    }
}
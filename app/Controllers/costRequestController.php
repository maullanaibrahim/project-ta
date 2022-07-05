<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class costRequestController extends Controller
{
    public function index()
    {
        return view('costRequest.index', [
            "title" => "Data Pengajuan Biaya"
        ]);
    }
}

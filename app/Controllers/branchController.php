<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class branchController extends Controller
{
    public function index()
    {
        return view('branch.index', [
            "title" => "Data Lokasi"
        ]);
    }
}

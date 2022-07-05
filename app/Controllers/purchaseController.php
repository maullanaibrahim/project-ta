<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchaseController extends Controller
{
    public function index()
    {
        return view('purchase.index', [
            "title" => "Data Purchase Order"
        ]);
    }
    
    public function store()
    {
        return view('purchase.create', [
            "title" => "Buat PO Baru"
        ]);
    }
}

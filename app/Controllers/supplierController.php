<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index()
    {
        return view('supplier.index', [
            "title" => "Data Supplier"
        ]);
    }
}

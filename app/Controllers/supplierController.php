<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class supplierController extends Controller
{
    public function index()
    {
        return view('supplier.index', [
            "title" => "Data Supplier",
            "suppliers" => Supplier::all()
        ]);
    }
}

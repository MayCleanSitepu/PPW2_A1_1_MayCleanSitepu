<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;

class barangController extends Controller
{
    public function index()
    {
        $data_barang = Barang::all();
        return view('barang', compact('data_barang'));
    }


}

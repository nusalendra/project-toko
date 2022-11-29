<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Barang;

class CatalogAlatTulisController extends Controller
{
    public function index() {
        $data = Kategori::where('id', 2)->pluck('name');
        
        $dataNama1 = Barang::where('id', 3)->pluck('name');    
        $dataStock1 = Barang::where('id', 3)->pluck('stock');
        $dataHarga1 = Barang::where('id', 3)->pluck('harga');
        
        return view('catalogAlatTulis/index', [
        'title' => 'Catalog Alat Tulis'
        ], compact('data', 'dataNama1', 'dataStock1', 'dataHarga1'));
    }
}

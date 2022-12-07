<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
// use DB;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index() {
        $data = Barang::all();
            
        return view('barang/index', ['title' => 'Barang'], compact('data'));
    }

    public function create() {
        $kategori = Kategori::all();
        
        return view('barang/create', ['title' => 'Create Barang'], compact('kategori'));
    }

    public function store(Request $request) {   
        $barang = New Barang;
         
        $barang->name = $request->name;
        $barang->slug = $request->slug;
        $barang->stock = $request->stock;
        $barang->harga = $request->harga;
        $barang->kategori_id = $request->kategori_id;
        
        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $barang['image'] = $filename;
        }

        $barang->deskripsi = $request->input('content');
        
        $barang->save();

        return redirect('/barang')->with('success', 'Data has been added!');
    }

    public function show($id) {
        
        $barang = Barang::where('id', $id)->first();
  
      return view('barang/show', ['title' => 'Show Barang'], compact('barang'));

    }

    public function edit($id) {
        $barang = Barang::find($id);
        $kategori = Kategori::all();

        return view('barang/edit', ['title' => 'Edit Barang'], compact('barang', 'kategori'));
    }

    public function update(Request $request) {
        $barang = Barang::find($request->id);

        $barang->name = $request->name;
        $barang->slug = $request->slug;
        $barang->stock = $request->stock;
        $barang->harga = $request->harga;
        $barang->kategori_id = $request->kategori_id;

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $barang['image'] = $filename;
        }
        
        $barang->deskripsi = $request->input('content');

        $barang->save();

        return redirect('/barang')->with('success', 'Data has been edited!');
    }

    public function destroy(Request $request) {
        $barang = Barang::find($request->id);

        $barang->delete();

        return redirect('/barang')->with('success', 'Data has been deleted!');
    }
}

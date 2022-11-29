<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller {    
    public function index() {
        $data = Kategori::all();

        return view('kategori/index', ['title' => 'Kategori'], compact('data'));
    }
    
    public function create()
    {
        return view('kategori/create', ['title' => 'Tambah Kategori']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new Kategori;

        $kategori->name = $request->name;
        $kategori->slug = $request->slug;

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $kategori['image'] = $filename;
        }

        $kategori->save();

        return redirect('/kategori')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('kategori/edit', ['title' => 'Edit Kategori'], compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($request->$id);

        $kategori->name = $request->name;
        $kategori->slug = $request->slug;

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $kategori['image'] = $filename;
        }

        $kategori->save();

        return redirect('/kategori')->with('success', 'Data has been edited!');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kategori = Kategori::find($request->id);

        $kategori->delete();

        return redirect('/kategori')->with('success', 'Data has been deleted!');
    }
}

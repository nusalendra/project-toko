<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function index() {
        $data = Rak::get();

        return view('rak/index', ['title' => 'Rak'], compact('data'));
    }

    public function store(Request $request) {
        $rak = new Rak;

        $rak->name = $request->name;

        $rak->save();

        return redirect('/rak')->with('success', 'Data has been added!');
    }

    public function create() {
        return view('rak/create', ['title' => 'Tambah Rak']);
    }

    public function edit($id) {
        $rak = Rak::find($id);

        return view('rak/edit', ['title' => 'Edit Rak'], compact('rak'));
    }

    public function update(Request $request) {
        $rak = Rak::find($request->id);

        $rak->name = $request->name;

        $rak->save();

        return redirect('/rak')->with('success', 'Data has been edited!');
    }

    public function destroy(Request $request) {
        $rak = Rak::find($request->id);

        $rak->delete();

        return redirect('rak')->with('success', 'Data has been deleted!');
    }
}

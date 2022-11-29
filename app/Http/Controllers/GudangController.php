<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;

class GudangController extends Controller
{
    public function index() {
        $data = Gudang::get();

        return view('gudang/index', ['title' => 'Gudang'], compact('data'));
    }

    public function create() {
        return view('gudang/create', ['title' => 'Gudang']);
    }

    public function store(Request $request) {
        $gudang = new Gudang;

        $gudang->name = $request->name;

        $gudang->save();

        return redirect('/gudang')->with('success', 'Data has been added!');
    }

    public function edit($id) {
        $gudang = Gudang::find($id);

        return view('gudang/edit', ['title' => 'Gudang'], compact('gudang'));
    }

    public function update(Request $request) {
        $gudang = Gudang::find($request->id);

        $gudang->name = $request->name;

        $gudang->save();

        return redirect('/gudang')->with('success', 'Data has been edited!');
    }

    public function destroy(Request $request) {
        $gudang = Gudang::find($request->id);

        $gudang->delete();

        return redirect('/gudang')->with('success', 'Data has been deleted!');
    }
}

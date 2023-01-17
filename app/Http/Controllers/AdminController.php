<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class AdminController extends Controller
{
    public function index() {
        $data = Transaksi::whereNull('barang_keluar')->get();

        return view('admin.index', ["title" => "HomeAdmin"], compact('data'));
    }

    public function store(Request $request) {
        $transaksi = Transaksi::find($request->transaksi_id);
        $transaksi->barang_keluar = \Carbon\Carbon::now()->toDateTimeString();
        
        $transaksi->save();

        return redirect('/homeAdmin')->with('success', 'Successful Transaction');
    }
}

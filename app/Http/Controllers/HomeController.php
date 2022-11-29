<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class HomeController extends Controller
{
    public function index() {
        $data = Kategori::all();

        return view('home', ['title' => 'Home'], compact("data"));
    }

    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';

    public function kategori() {
        return $this->belongsTo("App\Models\Kategori");
    }

    public function transaksi() {
        return $this->hasMany("App\Models\Transaksi", 'barang_id', 'id');
    }
}

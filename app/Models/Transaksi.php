<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
   public function user() {
    return $this->belongsTo('App\Models\User', 'user_id', 'id');
   }

   public function barang() {
      return $this->belongsTo('App\Models\Barang', 'barang_id', 'id');
   }
}

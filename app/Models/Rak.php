<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    public function barang() {
        return $this->hasMany("App\Models\Barang");
    }
}

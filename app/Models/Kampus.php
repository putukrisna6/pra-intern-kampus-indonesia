<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    public function kota() {
        return $this->belongsTo(Kota::class);
    }

    public function fakultas() {
        return $this->hasMany(Fakultas::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kota', 'id_provinsi'];
    public $timestamps = false;

    public function provinsi() {
        return $this->belongsTo(Provinsi::class);
    }

    public function kampuses() {
        return $this->hasMany(Kampus::class);
    }
}

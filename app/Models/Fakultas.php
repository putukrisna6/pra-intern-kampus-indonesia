<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_fakultas', 'id_kampus'];
    public $timestamps = false;

    public function kampus() {
        return $this->belongsTo(Kampus::class);
    }

    public function jurusans() {
        return $this->hasMany(Jurusan::class);
    }
}

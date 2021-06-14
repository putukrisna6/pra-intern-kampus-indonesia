<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_jurusan', 'id_fakultas', 'kuota'];
    public $timestamps = false;

    public function fakultas() {
        return $this->belongsTo(Fakultas::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    public const JENIS_NEGERI = 'Negeri';
    public const JENIS_SWASTA = 'Swasta';

    protected $fillable = ['nama_kampus', 'id_kota', 'jenis_kampus'];
    public $timestamps = false;

    public function kota() {
        return $this->belongsTo(Kota::class);
    }

    public function fakultas() {
        return $this->hasMany(Fakultas::class);
    }
}

<?php

namespace App\Core\Application\Usecases;

use Illuminate\Support\Facades\DB;

class GetFakultasbyKampus
{
    public function execute(int $id_kampus)
    {
        $fakultas = DB::table('fakultas')
            ->select('id', 'nama_fakultas')
            ->where('id_kampus', $id_kampus)
            ->get();

        return $fakultas;
    }
}

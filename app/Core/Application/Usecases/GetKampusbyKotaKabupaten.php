<?php

namespace App\Core\Application\Usecases;

use Illuminate\Support\Facades\DB;

class GetKampusbyKotaKabupaten
{
    public function execute(int $id_kota)
    {
        $kampuses = DB::table('kampuses')
            ->select('id', 'nama_kampus', 'jenis_kampus')
            ->where('id_kota', $id_kota)
            ->get();

        return $kampuses;
    }
}

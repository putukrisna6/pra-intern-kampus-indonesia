<?php

namespace App\Core\Application\Usecases;

use Illuminate\Support\Facades\DB;

class GetKampusByProvinsi
{
    public function execute(int $id_provinsi)
    {
        $kampuses = DB::select("
            SELECT kampuses.id, nama_kampus, jenis_kampus
            FROM kampuses JOIN (
                SELECT kotas.id
                FROM kotas
                WHERE id_provinsi = $id_provinsi
            ) AS k
            ON k.id = kampuses.id_kota;
        ");

        return $kampuses;
    }
}

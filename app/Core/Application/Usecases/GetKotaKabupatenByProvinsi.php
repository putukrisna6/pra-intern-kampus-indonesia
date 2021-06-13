<?php

namespace App\Core\Application\Usecases;

use Illuminate\Support\Facades\DB;

class GetKotaKabupatenByProvinsi
{
    public function execute(int $id_provinsi)
    {
        $kotas = DB::table('kotas')
            ->select('id', 'nama_kota')
            ->where('id_provinsi', $id_provinsi)
            ->get();

        return $kotas;
    }
}

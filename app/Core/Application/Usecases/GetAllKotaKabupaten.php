<?php

namespace App\Core\Application\Usecases;

use Illuminate\Support\Facades\DB;

class GetAllKotaKabupaten
{
    public function execute()
    {
        $kotas = DB::table('kotas')->select('id', 'nama_kota')->get();
        return $kotas;
    }
}

<?php

namespace App\Core\Application\Usecases;

use Illuminate\Support\Facades\DB;

class GetAllProvinsi
{
    public function execute()
    {
        $provinsis = DB::table('provinsis')->select('id', 'nama_provinsi')->get();
        return $provinsis;
    }
}

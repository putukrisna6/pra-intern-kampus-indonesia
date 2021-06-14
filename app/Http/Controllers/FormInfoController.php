<?php

namespace App\Http\Controllers;

use App\Core\Application\Usecases\GetKampusbyKotaKabupaten;
use App\Core\Application\Usecases\GetKampusByProvinsi;
use App\Core\Application\Usecases\GetKotaKabupatenByProvinsi;
use Illuminate\Http\Request;

class FormInfoController extends Controller
{
    public function getKotaKabupaten($id_provinsi)
    {
        $kotas = (new GetKotaKabupatenByProvinsi)->execute($id_provinsi);
        return $kotas;
    }

    public function getKampus($id_kota)
    {
        $kampuses = (new GetKampusbyKotaKabupaten)->execute($id_kota);
        return $kampuses;
    }

    public function getKampusByProvinsi($id_provinsi) {
        $kampuses = (new GetKampusByProvinsi)->execute($id_provinsi);
        return $kampuses;
    }
}

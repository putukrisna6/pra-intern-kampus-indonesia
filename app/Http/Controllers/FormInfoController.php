<?php

namespace App\Http\Controllers;

use App\Core\Application\Usecases\GetKotaKabupatenByProvinsi;
use Illuminate\Http\Request;

class FormInfoController extends Controller
{
    public function getKotaKabupaten($id_provinsi)
    {
        $kotas = (new GetKotaKabupatenByProvinsi)->execute($id_provinsi);
        return $kotas;
    }
}

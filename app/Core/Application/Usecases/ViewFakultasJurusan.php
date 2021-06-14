<?php

namespace App\Core\Application\Usecases;

use App\Core\Application\OutputContainer\FakultasJurusanInfo;
use App\Core\Application\OutputContainer\JurusanInfo;
use Illuminate\Support\Facades\DB;

class ViewFakultasJurusan
{
    public function execute(int $id_kampus)
    {
        $rows = DB::table('fakultas')
            ->orderBy('fakultas.id')
            ->join('jurusans', 'jurusans.id_fakultas', 'fakultas.id')
            ->where('fakultas.id_kampus', $id_kampus)
            ->select('fakultas.nama_fakultas', 'fakultas.id as id_fakultas', 'jurusans.nama_jurusan', 'jurusans.id as id_jurusan')
            ->get();

        $fakultas = [];
        $current_fakultas = null;
        $current_jurusan = null;

        foreach ($rows as $row) {
            if ($current_fakultas != $row->id_fakultas) {
                $current_fakultas = $row->id_fakultas;
                $fakultas[] = new FakultasJurusanInfo($row->id_fakultas, $row->nama_fakultas, []);
            }

            $fakul = &$fakultas[count($fakultas) - 1];

            if ($current_jurusan != $row->id_jurusan) {
                $current_jurusan = $row->id_jurusan;
                $fakul->jurusan[] = new JurusanInfo($row->id_jurusan, $row->nama_jurusan);
            }
        }

        return $fakultas;
    }
}

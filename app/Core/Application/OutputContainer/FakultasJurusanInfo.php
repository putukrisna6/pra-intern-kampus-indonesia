<?php

namespace App\Core\Application\OutputContainer;

use JsonSerializable;

class FakultasJurusanInfo implements JsonSerializable
{
    public $id;
    public $nama_fakultas;
    public $jurusan;

    /**
     * @param integer $zona
     */
    public function __construct(int $id, string $nama_fakultas, array $jurusan)
    {
        $this->id = $id;
        $this->nama_fakultas = $nama_fakultas;
        $this->jurusan = $jurusan;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'nama_jurusan' => $this->nama_jurusan,
            'jurusan' => $this->jurusan,
        ];
    }
}

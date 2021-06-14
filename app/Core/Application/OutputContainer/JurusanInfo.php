<?php

namespace App\Core\Application\OutputContainer;

use JsonSerializable;

class JurusanInfo implements JsonSerializable
{
    public $id;
    public $nama_jurusan;

    /**
     * @param integer $zona
     */
    public function __construct(int $id, string $nama_jurusan)
    {
        $this->id = $id;
        $this->nama_jurusan = $nama_jurusan;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'nama_jurusan' => $this->nama_jurusan,
        ];
    }
}

<?php

namespace App\Imports;

use App\Models\KodeMss;
use Maatwebsite\Excel\Concerns\ToModel;

class KodeMssImport implements ToModel
{
    public function model(array $row)
    {
        return new KodeMss([
            'kode_mss' => $row[0],
            'poin' => $row[1],
            'keterangan' => $row[2],
            'konsekuensi' => $row[3],
        ]);
    }
}

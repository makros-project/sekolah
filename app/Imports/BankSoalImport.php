<?php

namespace App\Imports;

use App\Models\BankSoal;
use Maatwebsite\Excel\Concerns\ToModel;

class BankSoalImport implements ToModel
{
    public function model(array $row)
    {
        return new BankSoal([
            'mapel' => $row[0],
            'guru' => $row[1],
            'tingkat' => $row[2],
            'kode' => $row[3],
            'foto' => $row[4],
            'soal' => $row[5],
            'pilihan_a' => $row[6],
            'pilihan_b' => $row[7],
            'pilihan_c' => $row[8],
            'pilihan_d' => $row[9],
            'pilihan_e' => $row[10],
            'jawaban_benar' => $row[11],
            'poin' => $row[12],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',  // Ganti pemisah menjadi ;
        ];
    }
}


<?php

namespace App\Exports;
namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromArray;

class SiswaExport implements FromArray
{
    public function array(): array
    {
        $siswa = Siswa::all(['nis', 'nama', 'kelas', 'jk'])->toArray();
        return array_merge(
            [['NIS', 'Nama', 'Kelas', 'Jenis Kelamin']], // Header kolom
            $siswa                                       // Data
        );
    }
}

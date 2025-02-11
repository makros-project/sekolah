<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class KodeMss extends Model
{
    protected $table = 'kode_mss';

    protected $fillable = [
        'kode_mss',
        'poin',
        'keterangan',
        'konsekuensi',
    ];
}

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


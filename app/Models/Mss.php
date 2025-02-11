<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mss extends Model
{
    use HasFactory;

    protected $table = 'msses';

    protected $fillable = [
        'kode',
        'nama',
        'poin',
        'kode_mss',
        'tanggal',
        'keterangan',
        'guru',
        'kelas',
        'karakter',
        'konsekuensi',
    ];
}

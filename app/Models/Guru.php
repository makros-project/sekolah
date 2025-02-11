<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus'; // Nama tabel

    protected $fillable = [
        'kode', // Field yang dapat diisi
        'nama', // Field yang dapat diisi
    ];
}

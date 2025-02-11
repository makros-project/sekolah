<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'siswas';

    // Kolom yang dapat diisi melalui form
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jk',    
        'poin', // Tambahkan kolom poin di sini

    ];

    /**
     * Jika ada relasi ke tabel lain, Anda bisa menambahkan metode di sini.
     * Contoh: relasi ke tabel kelas
     *
     * public function kelas()
     * {
     *     return $this->belongsTo(Kelas::class, 'kelas_id');
     * }
     */
}

class SiswaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Siswa([
            'nis' => $row['nis'],
            'nama' => $row['nama'],
            'kelas' => $row['kelas'],
            'jk' => $row['jk'],
            'poin' => $row['poin'],
        ]);
    }
}
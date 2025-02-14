<?php

namespace App\Exports;

use App\Models\Mss;
use Maatwebsite\Excel\Concerns\FromArray;

class MssExport implements FromArray
{
    /**
     * Menyiapkan data array untuk diekspor ke Excel.
     *
     * @return array
     */
    public function array(): array
    {
        // Mengambil semua data dari model Mss dengan field tertentu
        $data_mss = Mss::select([
            'kode', 
            'nama', 
            'poin', 
            'kode_mss', 
            'tanggal', 
            'keterangan', 
            'guru', 
            'kelas', 
            'karakter', 
            'konsekuensi'
        ])->get()->toArray();

        // Menambahkan header ke dalam array data
        return array_merge(
            [[
                'Kode', 
                'Nama', 
                'Poin', 
                'Kode MSS', 
                'Tanggal', 
                'Keterangan', 
                'Guru', 
                'Kelas', 
                'Karakter', 
                'Konsekuensi'
            ]], 
            $data_mss  // Data siswa
        );
    }
}

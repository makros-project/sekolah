<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            [ 'kode' => 'g001', 'nama' => 'Aris Risnandar, S.Pd.I.'],
            [ 'kode' => 'g002', 'nama' => 'Dania Ajahra, S.Pd'],
            [ 'kode' => 'g003', 'nama' => 'Ai Komariah, S.Kom'],
            [ 'kode' => 'g004', 'nama' => 'Aang Himat Hidayat, S.Pd'],
            [ 'kode' => 'g005', 'nama' => 'Annisa Levinia Putri'],
            [ 'kode' => 'g006', 'nama' => 'Fajar Nugraha, S.Pd'],
            [ 'kode' => 'g007', 'nama' => 'Rina Nurhayati'],
            [ 'kode' => 'g008', 'nama' => 'Nanang Sumarna'],
            [ 'kode' => 'g009', 'nama' => 'Tio Khalasya (g015)'],
            [ 'kode' => 'g010', 'nama' => 'Topan Gilang Nugraha'],
            [ 'kode' => 'g011', 'nama' => 'Dipa Nugraha'],
            [ 'kode' => 'g012', 'nama' => 'Asep Maktal Rosada, S.Si'],
            [ 'kode' => 'g013', 'nama' => 'Sri R Pratiwi'],
            [ 'kode' => 'g014', 'nama' => 'Annisa Firdhausi, S.Pd'],
            [ 'kode' => 'g015', 'nama' => 'Aulia Putri Riani'],
            [ 'kode' => 'g016', 'nama' => 'SPV'],
            [ 'kode' => 'g017', 'nama' => 'Riska Yulia, S.Pd.'],
            [ 'kode' => 'g018', 'nama' => 'Azizah Nur Avriliani'],
            [ 'kode' => 'g019', 'nama' => 'Riska Nur Azizah'],
            [ 'kode' => 'g020', 'nama' => 'Sri Novianti'],
            [ 'kode' => 'g021', 'nama' => 'Raka Ahmad Dilyasa'],
            [ 'kode' => 'g022', 'nama' => 'Nabila Nurfalah'],
            [ 'kode' => 'g023', 'nama' => 'Della Octaviani Q, S.Pd'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeMssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kode_mss')->insert([
            [ 'kode_mss' => 'p11', 'karakter' => 'Peduli sosial', 'keterangan' => 'Proaktif berpartisipasi dalam membantu orang lain.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 1],
            [ 'kode_mss' => 'p12', 'karakter' => 'Bersahabat/Komunikatif', 'keterangan' => 'Berpartisipasi aktif dalam diskusi belajar.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 1],
            [ 'kode_mss' => 'p13', 'karakter' => 'Bersahabat/Komunikatif', 'keterangan' => 'Mendapat kemajuan yang baik dalam diskusi belajar.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 1],
            [ 'kode_mss' => 'p14', 'karakter' => 'Kerja keras', 'keterangan' => 'Mendapat nilai tertinggi di kelas (tugas/quiz/ulangan).', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 1],
            [ 'kode_mss' => 'p15', 'karakter' => 'Kerja Keras', 'keterangan' => 'Ikut Program menabung di sekolah', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 1],
            [ 'kode_mss' => 'p21', 'karakter' => 'Tanggung jawab', 'keterangan' => 'Inisiatif menjaga peralatan milik sekolah.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p22', 'karakter' => 'Jujur', 'keterangan' => 'Mengakui kesalahan /berkata jujur.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p23', 'karakter' => 'Bersahabat/Komunikatif', 'keterangan' => 'Menunjukan kerjasama yang baik dalam kelompok.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p24', 'karakter' => 'Kerja keras', 'keterangan' => 'Menampilkan presentasi yang bermakna.', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p25', 'karakter' => 'Kreatif', 'keterangan' => 'Menulis artikel di madding sekolah (terpilih).', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p26', 'karakter' => 'Religius', 'keterangan' => 'Berturut turut melaksanakan Sholat Berjamaah selama 1 minggu', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p27', 'karakter' => 'Kreatif', 'keterangan' => 'Rutin Baca Tulis di RHC', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p28', 'karakter' => 'Kreatif', 'keterangan' => 'Resensi ditempel di mading', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 2],
            [ 'kode_mss' => 'p31', 'karakter' => 'Kerja keras', 'keterangan' => 'Membuat sekolah terkenal dimata sekolah lain pada tingkat provinsi Jawa Barat (Minimal)', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 3],
            [ 'kode_mss' => 'p32', 'karakter' => 'Kerja keras', 'keterangan' => 'Secara konsisten menunjukan perubahan yang baik dalam hal kedewasaan/kepribadian atau akademik', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 3],
            [ 'kode_mss' => 'p33', 'karakter' => 'Kerja keras', 'keterangan' => 'Juara Lomba Antar Kelas', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 3],
            [ 'kode_mss' => 'p34', 'karakter' => 'Disiplin', 'keterangan' => 'Membayar iuran bulanan tepat waktu', 'konsekuensi' => 'Kebaikan dicatat oleh sekolah', 'poin' => 3],
            [ 'kode_mss' => 'm11', 'karakter' => 'Tidak Disiplin', 'keterangan' => 'Tidak menggunakan seragam sekolah yang seharusnya (Tidak Sesuai)', 'konsekuensi' => 'Pulang dan ganti', 'poin' => -1],
            [ 'kode_mss' => 'm12', 'karakter' => 'Tidak Disiplin', 'keterangan' => 'Rambut tidak sepantasnya (Laki Laki lebih dari 4 Cm (Perempuan tidak diikat)', 'konsekuensi' => 'Potong rambut', 'poin' => -1],
                [
                    
                    'kode_mss' => 'm12',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Rambut tidak sepantasnya (Laki Laki lebih dari 4 Cm (Perempuan tidak diikat)',
                    'konsekuensi' => 'Potong rambut',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm13',
                    'karakter' => 'tidak religius',
                    'keterangan' => 'Tidak memakai kerudung (Perempuan)/Peci (Laki laki) pada hari jumat',
                    'konsekuensi' => 'Memakai kerudung/peci membuat sendiri/Infaq kerudung Rp.15.000',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm14',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Menggunakan aksesoris berlebihan',
                    'konsekuensi' => 'Disita selama 3 hari',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm15',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Kuku tidak sepantasnya (berwarna atau tidak dipotong)',
                    'konsekuensi' => 'Potong kuku di tempat',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm16',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Menggangu teman/aktivitas kelas',
                    'konsekuensi' => 'Meminta maaf di kelas/ruangan',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm17',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Tidur selama jam pelajaran',
                    'konsekuensi' => 'Cuci muka dan lari di lapangan',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm19',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Seragam dikeluarkan',
                    'konsekuensi' => 'Bagian bawah seragam dicoret spidol',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm110',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Sepatu/Kaos Kaki Tidak Sesuai',
                    'konsekuensi' => 'Ganti dengan warna yang sesuai/ beli pengganti',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm111',
                    'karakter' => 'tidak religius',
                    'keterangan' => 'Tidak memakai Ciput (Perempuan)',
                    'konsekuensi' => 'Menggunakan Ciput dari kertas/beli',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm112',
                    'karakter' => 'Tidak Bekerja Keras',
                    'keterangan' => 'Tidak memperhatikan guru saat belajar',
                    'konsekuensi' => 'Membuat rangkuman',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm113',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Tidak Semangat Belajar',
                    'konsekuensi' => 'Membuat rangkuman pelajaran',
                    'poin' => -1,
                ],
                [
                    
                    'kode_mss' => 'm21',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Tidak mengerjakan/membawa tugas sekolah',
                    'konsekuensi' => 'Mengerjakan tugas di luar kelas/RHC kerja sosial di kelas',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm22',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Bersikap tidak sepantasnya',
                    'konsekuensi' => 'Meminta maaf saat upacara bulanan',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm23',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'membuang sampah sembarangan',
                    'konsekuensi' => 'Bekerja sosial selama 2 jam',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm24',
                    'karakter' => 'Tidak tanggung jawab',
                    'keterangan' => 'Tidak menjaga peralatan milik sekolah',
                    'konsekuensi' => 'Mengganti barang/ kerja sosial',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm25',
                    'karakter' => 'Tidak tanggung jawab',
                    'keterangan' => 'Merusak property sekolah',
                    'konsekuensi' => 'Mengganti / memperbaiki barangnya',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm26',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Datang terlambat tanpa alasan yang jelas',
                    'konsekuensi' => 'Membaca Quran 1 halaman',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm27',
                    'karakter' => 'Tidak bersahabat/tidak komunikatif',
                    'keterangan' => 'Berbicara kasar',
                    'konsekuensi' => 'dilarang berbicara selama pelajaran dan meminta maaf',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm29',
                    'karakter' => 'tidak religius',
                    'keterangan' => 'Tidak Melaksanakan Sholat Berjamaah',
                    'konsekuensi' => 'Mengerjakan sholat sunnah taubat',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm210',
                    'karakter' => 'Tidak tanggung jawab',
                    'keterangan' => 'Menginjak tanaman',
                    'konsekuensi' => 'Bekerja sosial',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm211',
                    'karakter' => 'tidak religius',
                    'keterangan' => 'Tidak konsisten memakai kerudung (Perempuan)',
                    'konsekuensi' => 'Meminta maaf saat upacara bulanan',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm212',
                    'karakter' => 'Tidak tanggung jawab',
                    'keterangan' => 'Tidak Hadir Ekskul Tanpa Alasan yang Jelas (Alfa)',
                    'konsekuensi' => 'Kerja Sosial',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm213',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Tidak Hadir Tanpa Alasan yang Jelas (Alfa)',
                    'konsekuensi' => 'Merangkum pelajaran yang terlewat dan dipisahkan dari kelas',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'm31',
                    'karakter' => 'Tidak bersahabat/tidak komunikatif',
                    'keterangan' => 'Melakukan tindakan bullying',
                    'konsekuensi' => 'Memminta maaf dan mengganti rugi kerusakan/luka untuk berobat',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm32',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Merokok/Membawa Rokok',
                    'konsekuensi' => 'Berinfaq seharga 1 bungkus rokok',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm33',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'menggunakan peralatan elektronik/hiburan selama jam pelajaran',
                    'konsekuensi' => 'HP disita selama 3 hari',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm34',
                    'karakter' => 'Tidak bersahabat/tidak komunikatif',
                    'keterangan' => 'Melakukan pencurian non criminal',
                    'konsekuensi' => 'Meminta maaf saat upacara bulanan dan mengembalikan barangnya',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm35',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Mencontek/Plagiat (pertama kali)',
                    'konsekuensi' => 'Membuat resume dari pelajarannya',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm36',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Tidak hadir dalam event sekolah',
                    'konsekuensi' => 'Bekerja sosial selama 3 hari',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm37',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Meninggalkan Kelas/Sekolah tanpa izin',
                    'konsekuensi' => 'Merangkum pelajaran dan dipisahkan dari kelas',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm38',
                    'karakter' => 'tidak religius',
                    'keterangan' => 'Berbohong',
                    'konsekuensi' => 'Meminta maaf saat upacara bulanan',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm39',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Menambah waktu liburan',
                    'konsekuensi' => 'Membuat rangkuman pelajaran yang terlewati dan dipisahkan di RHC',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm310',
                    'karakter' => 'Tidak Disiplin',
                    'keterangan' => 'Mencontek ketika Ulangan Harian/Ujian',
                    'konsekuensi' => 'Diberi nilai nol apabila terbukti dan mengaku bersalah',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm311',
                    'karakter' => 'tidak religius',
                    'keterangan' => 'Berpacaran',
                    'konsekuensi' => 'Bekerja sosial dan meminta maaf saat upacara bulanan',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm312',
                    'karakter' => 'Tidak bertanggung jawab',
                    'keterangan' => 'Tidak Melakukan remedial',
                    'konsekuensi' => 'Tidak diperbolehkan mengganti PENGHARGAAN',
                    'poin' => -3,
                ],
                [
                    
                    'kode_mss' => 'm214',
                    'karakter' => 'Berbahasa',
                    'keterangan' => 'Berbicara bahasa daerah bukan pada tempatnya',
                    'konsekuensi' => 'Memeinta maaf pada tiap kelas di sekolah/Menulis artikel dan dipajang di Mading sekolah',
                    'poin' => -2,
                ],
                [
                    
                    'kode_mss' => 'p119',
                    'karakter' => 'Peduli sosial',
                    'keterangan' => 'Proaktif berpartisipasi dalam membantu orang lain.',
                    'konsekuensi' => 'Kebaikan dicatat oleh sekolah',
                    'poin' => 1,
                ],
                [
                    
                    'kode_mss' => 'p16',
                    'karakter' => 'Disiplin',
                    'keterangan' => 'Rutin membaca informasi di mading',
                    'konsekuensi' => 'Kebaikan dicatat oleh guru',
                    'poin' => 1,
                ],
        
            
        ]);

    }
}

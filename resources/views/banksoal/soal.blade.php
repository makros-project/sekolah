@extends('adminlte::page')

@section('title', 'Soal Ujian')

@section('content_header')
    <h1>Soal Ujian</h1>
    <style>
        /* Mengatur media print untuk ukuran kertas A4 */
        @page {
            size: A4;
            margin: 10mm; /* Menentukan margin pada semua sisi (bisa disesuaikan) */
        }

        /* Media Query untuk Print */
        @media print {
            body {
                font-size: 12pt; /* Menyesuaikan ukuran font agar lebih cocok untuk kertas A4 */
                line-height: 1.5; /* Jarak antar baris */
            }

            /* Menetapkan ukuran lebar agar tidak melebihi halaman */
            .content {
                width: 100%; /* Menggunakan 100% lebar halaman */
                margin: 0;
                padding: 0;
            }

            /* Mengatur margin dan padding untuk elemen-elemen lain agar tidak terpotong */
            h1, h2, h3, p {
                page-break-inside: avoid; /* Mencegah pemisahan elemen di tengah halaman */
            }

            /* Mengatur elemen gambar agar tidak melampaui batas */
            img {
                max-width: 100%;
                height: auto;
            }

            /* Menyembunyikan elemen yang tidak perlu dicetak */
            .no-print {
                display: none;
            }

            /* Mengatur layout kolom jika dibutuhkan */
            .column {
                column-count: 2; /* Menambahkan 2 kolom untuk teks */
                column-gap: 20px;
            }
        }
    </style>
@stop

@section('content')
   <div class="container">
    <!-- Daftar Soal -->
    <div class="card">
        <div class="card-header mt-4">
            <div class="row">
                <div class="col">
                    <h3 class="card-title">Daftar Soal Ujian</h3> <br>
                    <h3 class="card-title">Mata Pelajaran : {{ $mapel }}</h3> <br>
                    <h3 class="card-title">Tingkat : {{ $tingkat }}</h3>
                </div>
                <div class="col">
                    <table class="table table-bordered">
                    <tr>
                        <td  style="width: 10px">Nama</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td></td>
                    </tr>
                </table>
            
                </div>
            </div>
            
        </div>
        <div class="card-body">
                <div class="row">
                    @foreach($soals as $index => $item)
                    <div class="col-md-auto">
                        <p class="mx-2 mt-2" >
                            {{ $index + 1 }}. 
                            {{ $item->soal }}<br>
                            a. {{ $item->pilihan_a }}<br>
                            b. {{ $item->pilihan_b }}<br>
                            c. {{ $item->pilihan_c }}<br>
                            d. {{ $item->pilihan_d }}<br>
                            e. {{ $item->pilihan_e }}
                            <div class="d-print-none">
                            jawaban : {{ $item->jawaban_benar }}</div>
                        </p>
                    </div>
                        @endforeach
                </div>
                   
             
        </div>
    </div>
</div>
@stop

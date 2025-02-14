@extends('adminlte::page')

@section('title', 'Daftar Bank Soal')

@section('content_header')
    <h1>Daftar Bank Soal</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">

            <!-- Pesan Sukses -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

       
            <!-- Tabel Daftar Bank Soal -->
            <div class="card">
 <div class="card-header">
            <!-- Tambah Soal Button -->
        <a href="{{ route('banksoal.create') }}" class="btn btn-primary mb-3">Tambah Soal Baru</a>

        </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mapel</th>
                                <th>Guru</th>
                                <th>Tingkat</th>
                                <th>Kode</th>
                                <th>Soal</th>
                                <th>Pilihan</th>
                                <th>Jawaban Benar</th>
                                <th>Poin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bankSoals as $index => $soal)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $soal->mapel }}</td>
                                    <td>{{ $soal->guru }}</td>
                                    <td>{{ $soal->tingkat }}</td>
                                    <td>{{ $soal->kode }}</td>
                                    <td>{{ $soal->soal }}</td>
                                    <td>
                                        A: {{ $soal->pilihan_a }}<br>
                                        B: {{ $soal->pilihan_b }}<br>
                                        C: {{ $soal->pilihan_c }}<br>
                                        D: {{ $soal->pilihan_d }}<br>
                                        E: {{ $soal->pilihan_e }}
                                    </td>
                                    <td>{{ $soal->jawaban_benar }}</td>
                                    <td>{{ $soal->poin }}</td>
                                    <td>
                                        <!-- Tombol Edit (untuk menuju ke halaman edit) -->
                                        <a href="{{ route('banksoal.edit', $soal->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    
                                        <!-- Form untuk Hapus Soal -->
                                        <form action="{{ route('banksoal.destroy', $soal->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus soal ini?')">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                    
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">Tidak ada data soal</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@stop

@section('js')
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('.table').DataTable({
                responsive: true,  // Menyesuaikan ukuran tabel
                lengthChange: false,  // Menonaktifkan perubahan jumlah data per halaman
                pageLength: 10,  // Menampilkan 10 data per halaman
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ soal per halaman",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ soal",
                    infoEmpty: "Tidak ada soal",
                    infoFiltered: "(filter dari _MAX_ total soal)"
                }
            });
        });
    </script>
@stop

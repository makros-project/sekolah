@extends('adminlte::page')

@section('content')
{{-- <div class="container"> --}}
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Daftar MSS</h3>
            <div class="card-tools">
                <a href="{{ route('mss.create') }}" class="btn btn-light btn-sm">Tambah MSS</a>
            </div>
            
        </div>
      <div class="mx-2 my-2">
              {{-- Form Entri MSS --}}
              <form action="{{ route('mss.store') }}" method="POST">
                @csrf
                        <div class="mb-1">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" value="{{ date('Y-m-d') }}" name="tanggal" required>
                        </div>
                        <div class="mb-1">
                            <label for="nama_siswa" class="form-label">Nama Siswa</label>
                            <select id="nama_siswa" name="nama_siswa" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Siswa</option>
                                @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="nama_guru" class="form-label">Nama Guru</label>
                            <select id="nama_guru" name="nama_guru" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Guru</option>
                                @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="mss" class="form-label">MSS</label>
                            <select id="mss" name="mss[]" class="form-control select2-multiple" multiple="multiple" required>
                                @foreach ($kode_mss as $mssItems)
                                    <option value="{{ $mssItems->kode_mss }}">{{ $mssItems->kode_mss }} - {{ $mssItems->keterangan }}</option>
                                @endforeach
                            </select>
                        </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
      </div>
        <div class="card-body">
            <table id="mssTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Poin</th>
                        <th>Kode MSS</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Guru</th>
                        <th>Kelas</th>
                        <th>Karakter</th>
                        <th>Konsekuensi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mss as $item)
                    <tr>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->poin }}</td>
                        <td>{{ $item->kode_mss }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->guru }}</td>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->karakter }}</td>
                        <td>{{ $item->konsekuensi }}</td>
                        <td>
                            <a href="{{ route('mss.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('mss.destroy', $item) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

@section('js')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Inisialisasi Select2
        $('.select2').select2({
            placeholder: "Pilih salah satu",
            allowClear: true,
            width: '100%'
        });

        // Inisialisasi Select2 untuk multiple select
        $('.select2-multiple').select2({
            placeholder: "Pilih MSS",
            allowClear: true,
            width: '100%'
        });
    });
</script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mssTable').DataTable({
            "responsive": true,
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json"
            }
        });
    });
</script>
@endsection

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Daftar Kode MSS</h3>
            <div class="card-tools">
                <a href="{{ route('kode_mss.create') }}" class="btn btn-light btn-sm">Tambah Kode</a>
                <a href="{{ route('kode_mss.importForm') }}" class="btn btn-success btn-sm">Import Kode MSS</a> <!-- Tombol Import -->

            </div>
        </div>
        <div class="card-body">
            <table id="kodeMssTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode MSS</th>
                        <th>Poin</th>
                        <th>Keterangan</th>
                        <th>Konsekuensi</th>
                        <th>Karakter</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kodeMss as $kode)
                    <tr>
                        <td>{{ $kode->kode_mss }}</td>
                        <td>{{ $kode->poin }}</td>
                        <td>{{ $kode->keterangan }}</td>
                        <td>{{ $kode->konsekuensi }}</td>
                        <td>{{ $kode->karakter }}</td>
                        <td>
                            <a href="{{ route('kode_mss.edit', $kode) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kode_mss.destroy', $kode) }}" method="POST" style="display:inline-block;">
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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kodeMssTable').DataTable({
            "responsive": true,
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json"
            }
        });
    });
</script>
@endsection

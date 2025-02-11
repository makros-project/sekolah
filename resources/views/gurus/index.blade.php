@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Daftar Guru</h3>
            <div class="card-tools">
                <a href="{{ route('gurus.create') }}" class="btn btn-light btn-sm">Tambah Guru</a>
            </div>
        </div>
        <div class="card-body">
            <table id="guruTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurus as $guru)
                    <tr>
                        <td>{{ $guru->kode }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>
                            <a href="{{ route('gurus.edit', $guru) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('gurus.destroy', $guru) }}" method="POST" style="display:inline-block;">
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
        $('#guruTable').DataTable({
            "responsive": true,
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json"
            }
        });
    });
</script>
@endsection

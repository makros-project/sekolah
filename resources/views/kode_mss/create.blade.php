@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Tambah Kode MSS</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kode_mss.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kode MSS</label>
                    <input type="text" name="kode_mss" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poin MSS</label>
                    <input type="number" name="poin" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Konsekuensi</label>
                    <textarea name="konsekuensi" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

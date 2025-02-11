@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h3 class="card-title">Edit Kode MSS</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kode_mss.update', $kodeMss) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Kode MSS</label>
                    <input type="text" name="kode_mss" value="{{ $kodeMss->kode_mss }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Poin MSS</label>
                    <input type="text" name="poin" value="{{ $kodeMss->poin }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" required>{{ $kodeMss->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <label>Konsekuensi</label>
                    <textarea name="konsekuensi" class="form-control" required>{{ $kodeMss->konsekuensi }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-warning text-white">Edit Guru</div>
        <div class="card-body">
            <form action="{{ route('gurus.update', $guru) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" value="{{ $guru->kode }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $guru->nama }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

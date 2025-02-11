@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Tambah Guru</div>
        <div class="card-body">
            <form action="{{ route('gurus.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

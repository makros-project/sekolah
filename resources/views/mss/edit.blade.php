@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h3 class="card-title">Edit MSS</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('mss.update', $mss) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" class="form-control" value="{{ $mss->kode }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mss->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="poin">Poin</label>
                    <input type="number" name="poin" class="form-control" value="{{ $mss->poin }}" required>
                </div>
                <div class="form-group">
                    <label for="kode_mss">Kode MSS</label>
                    <input type="text" name="kode_mss" class="form-control" value="{{ $mss->kode_mss }}" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $mss->tanggal }}" required>
                </div>
                <div class="form-group">
                    <label for="guru">Guru</label>
                    <input type="text" name="guru" class="form-control" value="{{ $mss->guru }}" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="{{ $mss->kelas }}" required>
                </div>
                <div class="form-group">
                    <label for="karakter">Karakter</label>
                    <input type="text" name="karakter" class="form-control" value="{{ $mss->karakter }}" required>
                </div>
                <div class="form-group">
                    <label for="konsekuensi">Konsekuensi</label>
                    <textarea name="konsekuensi" class="form-control">{{ $mss->konsekuensi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control">{{ $mss->keterangan }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('mss.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection

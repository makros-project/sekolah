@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Tambah MSS</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('mss.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" class="form-control" placeholder="Kode" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label for="poin">Poin</label>
                    <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                </div>
                <div class="form-group">
                    <label for="kode_mss">Kode MSS</label>
                    <input type="text" name="kode_mss" class="form-control" placeholder="Kode MSS" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru">Guru</label>
                    <input type="text" name="guru" class="form-control" placeholder="Guru" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
                </div>
                <div class="form-group">
                    <label for="karakter">Karakter</label>
                    <input type="text" name="karakter" class="form-control" placeholder="Karakter" required>
                </div>
                <div class="form-group">
                    <label for="konsekuensi">Konsekuensi</label>
                    <textarea name="konsekuensi" class="form-control" placeholder="Konsekuensi"></textarea>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('mss.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection

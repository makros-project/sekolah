@extends('adminlte::page')

@section('content')
<div class="container">
    <form action="{{ isset($siswa) ? route('siswa.update', $siswa) : route('siswa.store') }}" method="POST">
        @csrf
        @if(isset($siswa))
        @method('PUT')
        @endif

        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis ?? old('nis') }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama ?? old('nama') }}" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select name="kelas" class="form-control select2" required>
                <option value="X" {{ isset($siswa) && $siswa->kelas == 'X' ? 'selected' : '' }}>X</option>
                <option value="XI" {{ isset($siswa) && $siswa->kelas == 'XI' ? 'selected' : '' }}>XI</option>
                <option value="XII" {{ isset($siswa) && $siswa->kelas == 'XII' ? 'selected' : '' }}>XII</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" class="form-control select2" required>
                <option value="L" {{ isset($siswa) && $siswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ isset($siswa) && $siswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection

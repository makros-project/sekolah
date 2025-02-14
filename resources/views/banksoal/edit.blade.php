@extends('adminlte::page')

@section('title', 'Edit Bank Soal')

@section('content_header')
    <h1>Edit Bank Soal</h1>
@stop

@section('content')
    <form action="{{ route('banksoal.update', $soal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="mapel">Mapel</label>
            <input type="text" class="form-control" name="mapel" value="{{ $soal->mapel }}" required>
        </div>

        <div class="form-group">
            <label for="guru">Guru</label>
            <input type="text" class="form-control" name="guru" value="{{ $soal->guru }}" required>
        </div>

        <div class="form-group">
            <label for="tingkat">Tingkat</label>
            <input type="text" class="form-control" name="tingkat" value="{{ $soal->tingkat }}" required>
        </div>

        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" name="kode" value="{{ $soal->kode }}" required>
        </div>

        <div class="form-group">
            <label for="soal">Soal</label>
            <textarea class="form-control" name="soal" required>{{ $soal->soal }}</textarea>
        </div>

        <div class="form-group">
            <label for="pilihan_a">Pilihan A</label>
            <input type="text" class="form-control" name="pilihan_a" value="{{ $soal->pilihan_a }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_b">Pilihan B</label>
            <input type="text" class="form-control" name="pilihan_b" value="{{ $soal->pilihan_b }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_c">Pilihan C</label>
            <input type="text" class="form-control" name="pilihan_c" value="{{ $soal->pilihan_c }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_d">Pilihan D</label>
            <input type="text" class="form-control" name="pilihan_d" value="{{ $soal->pilihan_d }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_e">Pilihan E</label>
            <input type="text" class="form-control" name="pilihan_e" value="{{ $soal->pilihan_e }}" required>
        </div>

        <div class="form-group">
            <label for="jawaban_benar">Jawaban Benar</label>
            <input type="text" class="form-control" name="jawaban_benar" value="{{ $soal->jawaban_benar }}" required>
        </div>

        <div class="form-group">
            <label for="poin">Poin</label>
            <input type="number" class="form-control" name="poin" value="{{ $soal->poin }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Soal</button>
    </form>
@stop

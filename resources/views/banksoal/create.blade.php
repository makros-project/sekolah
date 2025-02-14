@extends('adminlte::page')

@section('title', 'Tambah Bank Soal')

@section('content_header')
    <h1>Tambah Bank Soal</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('banksoal.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="mapel">Mapel</label>
                                    <input type="text" name="mapel" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="guru">Guru</label>
                                    <input type="text" name="guru" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="tingkat">Tingkat</label>
                                    <input type="text" name="tingkat" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" name="kode" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control-file">
                                </div>
        
                                <div class="form-group">
                                    <label for="soal">Soal</label>
                                    <textarea name="soal" class="form-control" required></textarea>
                                </div>
        
                                <div class="form-group">
                                    <label for="pilihan_a">Pilihan A</label>
                                    <input type="text" name="pilihan_a" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="pilihan_b">Pilihan B</label>
                                    <input type="text" name="pilihan_b" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="pilihan_c">Pilihan C</label>
                                    <input type="text" name="pilihan_c" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="pilihan_d">Pilihan D</label>
                                    <input type="text" name="pilihan_d" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="pilihan_e">Pilihan E</label>
                                    <input type="text" name="pilihan_e" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="jawaban_benar">Jawaban Benar</label>
                                    <input type="text" name="jawaban_benar" class="form-control" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="poin">Poin</label>
                                    <input type="number" name="poin" class="form-control" required>
                                </div>
        
                                <button type="submit" class="btn btn-success">Tambah Soal</button>
                            </form>
                        </div>
                    </div>
        
                </div>
                <div class="col-md-6">
    <!-- Form untuk upload CSV/Excel -->
    <div class="card mt-">
        <div class="card-body">
            <form action="{{ route('banksoal.importCSV') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Upload CSV/Excel</label>
                    <input type="file" name="file" class="form-control-file" required>
                </div>

                <button type="submit" class="btn btn-primary">Upload Soal</button>

                <a href="{{ asset('files/template_soal.csv') }}" class="btn btn-sm btn-warning">Template Soal</a>
            </form>
        </div>
    </div>
                </div>
            </div>
            <!-- Formulir untuk membuat soal -->
            
        
        </div>
    </div>
@stop

@section('css')
    <!-- Optional custom styles for this page -->
@stop

@section('js')
    <!-- Optional JS scripts for additional functionality -->
@stop

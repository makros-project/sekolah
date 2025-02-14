@extends('adminlte::page')

@section('title', 'Soal Ujian')

@section('content_header')
    <h1>Soal Ujian</h1>
@stop

@section('content')
    <!-- Form Filter -->
    <form action="{{ route('banksoal.lihat') }}" method="GET">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-control" required> 
                        <option value="">-- Pilih Mata Pelajaran --</option>
                        @foreach($mapels as $mapel)
                            <option value="{{ $mapel->mapel }}" >
                                {{ $mapel->mapel }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="tingkat">Tingkat</label>
                    <select name="tingkat" id="tingkat" class="form-control" required>
                        <option value="" selected disabled>-- Pilih Tingkat --</option>
                        @foreach($tingkats as $tingkat)
                            <option value="{{ $tingkat->tingkat }}" >
                                {{ $tingkat->tingkat }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-4">Tampilkan Soal</button>
                </div>
            </div>
        </div>
    </form>

@stop

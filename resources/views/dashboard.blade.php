@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Selamat datang di dashboard</p>

    <div class="card">
        <div class="card-header">
            Download Data ke Excel
        </div>
        <div class="card-body">
            <a href="{{ url('/export-siswa') }}" class="btn btn-success">
            Download Data Siswa
            </a>
            <a href="{{ url('/export-mss') }}" class="btn btn-warning">
                Download Data MSS
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Download Data ke Pdf
        </div>
        <div class="card-body">
            <a href="{{ route('banksoal.filter') }}" class="btn btn-success">
             Data Bank Soal
            </a>
            <a href="{{ url('/export-mss') }}" class="btn btn-warning">
                Download Data MSS
            </a>
        </div>
    </div>
  
    
@endsection

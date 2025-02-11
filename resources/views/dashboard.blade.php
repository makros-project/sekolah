@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Selamat datang di dashboard</p>

    <a href="{{ url('/export-siswa') }}" class="btn btn-success">
        Download Data Siswa
    </a>
    
@endsection

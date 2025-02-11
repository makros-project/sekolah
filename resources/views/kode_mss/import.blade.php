@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Import Data Kode MSS</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kode_mss.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Pilih File Excel</label>
                    <input type="file" class="form-control" name="file" required>
                </div>
                <button type="submit" class="btn btn-success">Import</button>
            </form>
        </div>
    </div>
</div>
@endsection

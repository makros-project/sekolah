@extends('adminlte::page')

@section('content')
{{-- <div class="container"> --}}
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Rekap MSS</h3>
            {{-- <div class="card-tools">
                <a href="{{ route('mss.create') }}" class="btn btn-light btn-sm">Tambah MSS</a>
            </div> --}}
            
        </div>
     <div class="card-header">
        <h2>Rekap berdasarkan SIswa</h2>
     </div>
        <div class="card-body">
            <table id="mssTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Total Poin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekap_mss_siswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->total_poin }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="card-header">
            <h2>Rekap berdasarkan Guru</h2>
         </div>
        <div class="card-body">
            <table id="mssTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Guru</th>
                        <th>Kode</th>
                        <th>Total Poin</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mss as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->guru }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->poin }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-header">
            <h2>Rekap berdasarkan MSS</h2>
         </div>
        <div class="card-body">
            <table id="mssTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Karakter</th>
                        <th>Total Poin</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mss as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->karakter }}</td>
                        <td>{{ $item->poin }}</td>
                      
                  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
    </div>
</div>



@endsection

@section('js')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Inisialisasi Select2
        $('.select2').select2({
            placeholder: "Pilih salah satu",
            allowClear: true,
            width: '100%'
        });

        // Inisialisasi Select2 untuk multiple select
        $('.select2-multiple').select2({
            placeholder: "Pilih MSS",
            allowClear: true,
            width: '100%'
        });
    });
</script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mssTable').DataTable({
            "responsive": true,
            "autoWidth": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json"
            }
        });
    });
</script>
@endsection

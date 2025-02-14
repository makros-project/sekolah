<?php

use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MssController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KodeMssController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\SiswaImportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('siswa', SiswaController::class);
    Route::resource('gurus', GuruController::class);
    Route::resource('kode_mss', KodeMssController::class);
    Route::resource('mss', MssController::class);
    Route::get('rekap_mss', [MssController::class, 'rekap_mss']);


    Route::get('/export-siswa', function () {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    });


Route::get('/import_siswa', [SiswaImportController::class, 'showForm'])->name('siswa.importForm');
Route::post('/import_siswa', [SiswaImportController::class, 'import'])->name('siswa.import');



Route::get('banksoal', [BankSoalController::class, 'index'])->name('banksoal.index');
Route::get('banksoal/create', [BankSoalController::class, 'create'])->name('banksoal.create');
Route::post('banksoal/store', [BankSoalController::class, 'store'])->name('banksoal.store');
Route::post('banksoal/import-csv', [BankSoalController::class, 'importCSV'])->name('banksoal.importCSV');
// Route untuk menampilkan form edit
Route::get('/banksoal/{id}/edit', [BankSoalController::class, 'edit'])->name('banksoal.edit');

// Route untuk update soal
Route::put('/banksoal/{id}', [BankSoalController::class, 'update'])->name('banksoal.update');
// Route untuk menghapus soal
Route::delete('/banksoal/{id}', [BankSoalController::class, 'destroy'])->name('banksoal.destroy');

});

require __DIR__.'/auth.php';

<?php

use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MssController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KodeMssController;
use App\Http\Controllers\ProfileController;
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


    Route::get('/export-siswa', function () {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    });


Route::get('/import', [SiswaImportController::class, 'showForm'])->name('siswa.importForm');
Route::post('/import', [SiswaController::class, 'import'])->name('siswa.import');


Route::get('/import', [KodeMssController::class, 'showImportForm'])->name('kode_mss.importForm');
Route::post('/import', [KodeMssController::class, 'import'])->name('kode_mss.import');

});

require __DIR__.'/auth.php';

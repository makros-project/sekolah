<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BankSoalImport;
use Validator;

class BankSoalController extends Controller
{
    public function index()
    {
         // Mengambil semua data bank soal
         $bankSoals = BankSoal::all();
        
         // Mengembalikan view dengan data soal
         return view('banksoal.index', compact('bankSoals'));
    }

    public function create()

    {
        return view('banksoal.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mapel' => 'required|string',
            'guru' => 'required|string',
            'tingkat' => 'required|string',
            'kode' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg',
            'soal' => 'required|string',
            'pilihan_a' => 'required|string',
            'pilihan_b' => 'required|string',
            'pilihan_c' => 'required|string',
            'pilihan_d' => 'required|string',
            'pilihan_e' => 'required|string',
            'jawaban_benar' => 'required|string',
            'poin' => 'required|integer',
        ]);

        if ($request->hasFile('foto')) {
            $filename = time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('uploads'), $filename);
            $validated['foto'] = $filename;
        }

        BankSoal::create($validated);

        return redirect()->route('banksoal.create')->with('success', 'Soal berhasil ditambahkan');
    }

    public function importCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $path = $request->file('file')->getRealPath();
        Excel::import(new BankSoalImport, $path);

        return redirect()->route('banksoal.create')->with('success', 'Soal berhasil diupload');
    }

    // Menampilkan form untuk mengedit soal
    public function edit($id)
    {
        $soal = BankSoal::findOrFail($id);
        return view('banksoal.edit', compact('soal'));
    }

    // Menyimpan perubahan soal
    public function update(Request $request, $id)
    {
        // Validasi inputan
        $request->validate([
            'mapel' => 'required',
            'guru' => 'required',
            'tingkat' => 'required',
            'kode' => 'required',
            'soal' => 'required',
            'jawaban_benar' => 'required',
            'poin' => 'required|integer',
        ]);

        // Update soal
        $soal = BankSoal::findOrFail($id);
        $soal->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('banksoal.index')->with('success', 'Soal berhasil diupdate');
    }

    // Menghapus soal
        public function destroy($id)
        {
            $soal = BankSoal::findOrFail($id);
            $soal->delete();

            return redirect()->route('banksoal.index')->with('success', 'Soal berhasil dihapus');
        }

}

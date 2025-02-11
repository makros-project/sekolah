<?php

namespace App\Http\Controllers;

use App\Models\KodeMss;
use Illuminate\Http\Request;
use App\Imports\KodeMssImport;
use Maatwebsite\Excel\Facades\Excel;

class KodeMssController extends Controller
{
    public function index()
    {
        $kodeMss = KodeMss::all();
        return view('kode_mss.index', compact('kodeMss'));
    }

    public function create()
    {
        return view('kode_mss.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mss' => 'required|unique:kode_mss,kode_mss|max:255',
            'keterangan' => 'required',
            'konsekuensi' => 'required',
        ]);

        KodeMss::create($request->all());
        return redirect()->route('kode_mss.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(KodeMss $kodeMss)
    {
        return view('kode_mss.edit', compact('kodeMss'));
    }

    public function update(Request $request, KodeMss $kodeMss)
    {
        $request->validate([
            'keterangan' => 'required',
            'konsekuensi' => 'required',
        ]);

        $kodeMss->update($request->all());
        return redirect()->route('kode_mss.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(KodeMss $kodeMss)
    {
        $kodeMss->delete();
        return redirect()->route('kode_mss.index')->with('success', 'Data berhasil dihapus.');
    }


     // Menampilkan form untuk import Excel
     public function showImportForm()
     {
         return view('kode_mss.import');
     }
 
     // Menangani import Excel
     public function import(Request $request)
     {
         $request->validate([
             'file' => 'required|mimes:xlsx,xls' // Validasi format file
         ]);
 
         // Proses import
         Excel::import(new KodeMssImport, $request->file('file'));
 
         return redirect()->route('kode_mss.index')->with('success', 'Data berhasil diimport!');
     }
}

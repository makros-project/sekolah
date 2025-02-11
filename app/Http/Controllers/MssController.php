<?php
namespace App\Http\Controllers;

use App\Models\Mss;
use App\Models\Guru;
use App\Models\KodeMss;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MssController extends Controller
{
    public function index()
    {
        $mss = Mss::all();
        $siswas = Siswa::all();
        $gurus = Guru::all();
        $kode_mss = KodeMss::all();

        return view('mss.index', compact('mss','siswas', 'gurus', 'kode_mss'));
    }

    public function create()
    {
        return view('mss.create');
    }

    public function store(Request $request)
    {
        // ngasih komen untuk melanjutkan array mss di kontroller di sini pake foreach
        // ngasih tambahan komen
        $request->validate([
            'kode' => 'required|unique:msses,kode|max:20',
            'nama' => 'required',
            'poin' => 'required|integer|min:0',
            'kode_mss' => 'required',
            'tanggal' => 'required|date',
            'guru' => 'required',
            'kelas' => 'required',
            'karakter' => 'required',
        ]);

        Mss::create($request->all());
        return redirect()->route('mss.index')->with('success', 'Data MSS berhasil ditambahkan.');
    }

    public function edit(Mss $mss)
    {
        return view('mss.edit', compact('mss'));
    }

    public function update(Request $request, Mss $mss)
    {
        $request->validate([
            'nama' => 'required',
            'poin' => 'required|integer|min:0',
            'kode_mss' => 'required',
            'tanggal' => 'required|date',
            'guru' => 'required',
            'kelas' => 'required',
            'karakter' => 'required',
        ]);

        $mss->update($request->all());
        return redirect()->route('mss.index')->with('success', 'Data MSS berhasil diperbarui.');
    }

    public function destroy(Mss $mss)
    {
        $mss->delete();
        return redirect()->route('mss.index')->with('success', 'Data MSS berhasil dihapus.');
    }
}

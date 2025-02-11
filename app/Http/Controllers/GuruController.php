<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('gurus.index', compact('gurus'));
    }

    public function create()
    {
        return view('gurus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:gurus,kode|max:10',
            'nama' => 'required|max:100',
        ]);

        Guru::create($request->all());
        return redirect()->route('gurus.index')->with('success', 'Guru berhasil ditambahkan.');
    }

    public function edit(Guru $guru)
    {
        return view('gurus.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'kode' => 'required|max:10|unique:gurus,kode,' . $guru->id,
            'nama' => 'required|max:100',
        ]);

        $guru->update($request->all());
        return redirect()->route('gurus.index')->with('success', 'Guru berhasil diperbarui.');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('gurus.index')->with('success', 'Guru berhasil dihapus.');
    }
}

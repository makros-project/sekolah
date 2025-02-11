<?php
namespace App\Http\Controllers\Api;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SiswaResource;

class SiswaController extends Controller
{
    // 1. Menampilkan semua data siswa
    public function index()
    {
        $siswas = Siswa::all();
        return SiswaResource::collection($siswas);
    }

    // 2. Menambahkan siswa baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'nis' => 'required|string|max:20|unique:siswa',
            'jk' => 'required|in:L,P',
        ]);

        $siswa = Siswa::create($validated);
        // return response()->json(['message' => 'Siswa berhasil ditambahkan', 'data' => $siswa], 201);
        return new SiswaResource(true, 'Data Siswa Berhasil Ditambahkan!', $siswa);
    }

    // 3. Menampilkan detail siswa
    public function show($id)
    {
        $siswa = Siswa::find($id);
        if (!$siswa) {
            return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
        }
        return response()->json($siswa);
    }

    // 4. Mengupdate data siswa
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        if (!$siswa) {
            return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'kelas' => 'sometimes|required|string|max:50',
            'nis' => 'sometimes|required|string|max:20|unique:siswa,nis,' . $id,
            'jk' => 'sometimes|required|in:L,P',
        ]);

        $siswa->update($validated);
        return response()->json(['message' => 'Siswa berhasil diupdate', 'data' => $siswa]);
    }

    // 5. Menghapus data siswa
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        if (!$siswa) {
            return response()->json(['message' => 'Siswa tidak ditemukan'], 404);
        }

        $siswa->delete();
        return response()->json(['message' => 'Siswa berhasil dihapus']);
    }
}

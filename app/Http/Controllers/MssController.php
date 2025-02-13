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
        $mss = Mss::orderby('id', 'desc')->get();
        $siswas = Siswa::all();
        $gurus = Guru::all();
        $kode_msses = KodeMss::all();

        return view('mss.index', compact('mss','siswas', 'gurus', 'kode_msses'));
    }

    public function create()
    {
        return view('mss.create');
    }

    public function store(Request $request)
 {
      $request->validate([
            'guru' => 'required',  // Validasi untuk kode, harus unik
            'nama' => 'required',  // Nama harus diisi
            'mss' => 'required',  // Nama harus diisi
            'tanggal' => 'required|date',  // Tanggal harus valid
         
        
         ]);

    foreach ($request->mss as $arraymss) {

         Mss::create([
            'guru' => $request->guru,  // Menggunakan nama_siswa untuk kode (sesuaikan dengan logika)
            'nama' => explode("|",$request->nama)[0],  // Menggunakan nama_siswa untuk nama
            'kelas' => explode("|",$request->nama)[1],  // Menggunakan nama_siswa untuk nama
            'kode' => explode("|",$arraymss)[0],  // Menggunakan nama_siswa untuk nama
            'poin' => explode("|",$arraymss)[1],  // Menggunakan nama_siswa untuk nama
            'keterangan' => explode("|",$arraymss)[2],  // Menggunakan nama_siswa untuk nama
            'karakter' => explode("|",$arraymss)[3],  // Menggunakan nama_siswa untuk nama
            'konsekuensi' => explode("|",$arraymss)[4],  // Menggunakan nama_siswa untuk nama
            'tanggal' => $request->tanggal,  // Menggunakan tanggal dari request
          
         
         ]);
        }
 
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

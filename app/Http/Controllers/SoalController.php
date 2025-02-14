<?php



namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SoalController extends Controller
{
    public function downloadSoal()
    {
        // Data soal yang ingin disajikan dalam PDF (misalnya, soal dari database)
        $soal = [
            ['pertanyaan' => 'Apa ibukota Indonesia?', 'jawaban' => 'Jakarta'],
            ['pertanyaan' => 'Berapa 2 + 2?', 'jawaban' => '4'],
            // Anda bisa menambahkan lebih banyak soal sesuai kebutuhan
        ];

        // Mengambil view dan mengonversinya ke PDF
        $pdf = Pdf::loadView('banksoal.soal', compact('soal'));

        // Mengunduh file PDF
        return $pdf->download('soal_ujian.pdf');
    }

    public function lihatSoal(Request $request)
    {
        $soals = BankSoal::where('mapel', $request->mapel)
        ->where('tingkat', $request->tingkat)
        ->get();

        $mapel = $request->mapel;
        $tingkat = $request->tingkat;

        return view('banksoal.soal', compact('soals', 'mapel' , 'tingkat'));

    }


    public function filterSoal()
    {
        // $mapels = BankSoal::all();  // Cari siswa berdasarkan ID
        $mapels = BankSoal::select('mapel')
        ->groupBy('mapel')
        ->get();
        $tingkats = BankSoal::select('tingkat')
        ->groupBy('tingkat')
        ->get();
        return view('banksoal.filter', compact('mapels', 'tingkats'));

    }
}

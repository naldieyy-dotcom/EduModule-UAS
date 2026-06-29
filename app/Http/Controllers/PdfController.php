<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function export()
    {
        $moduls = Modul::all();

        $pdf = Pdf::loadView('pdf.modul', compact('moduls'));

        return $pdf->download('Laporan_Modul.pdf');
    }
}
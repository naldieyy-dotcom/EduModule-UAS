<?php

namespace App\Http\Controllers;

use App\Models\Modul;

class DashboardController extends Controller
{
    public function index()
    {
        $totalModul = Modul::count();

        $totalMatkul = Modul::distinct('mata_kuliah')->count('mata_kuliah');

        $totalJenjang = Modul::distinct('jenjang')->count('jenjang');

        $tahunTerbaru = Modul::max('tahun_terbit') ?? '-';

        // Ambil 3 modul terbaru
        $modulTerbaru = Modul::latest()->take(3)->get();

        return view('dashboard.index', compact(
            'totalModul',
            'totalMatkul',
            'totalJenjang',
            'tahunTerbaru',
            'modulTerbaru'
        ));
    }
}
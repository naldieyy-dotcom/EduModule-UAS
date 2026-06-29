<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;
use Illuminate\Support\Facades\Storage;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $moduls = Modul::latest()->get();

            return view('modul.index', compact('moduls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('modul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'judul_modul' => 'required',
            'mata_kuliah' => 'required',
            'jenjang' => 'required',
            'file_modul' => 'required|mimes:pdf|max:5120',
            'tahun_terbit' => 'required'
        ]);

        $gambar = $request->file('gambar')->store('gambar_modul', 'public');

        $pdf = $request->file('file_modul')->store('file_modul', 'public');

        Modul::create([
            'gambar' => $gambar,
            'judul_modul' => $request->judul_modul,
            'mata_kuliah' => $request->mata_kuliah,
            'jenjang' => $request->jenjang,
            'file_modul' => $pdf,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        return redirect()
            ->route('modul.index')
            ->with('success', 'Modul berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul $modul)
    {
        return view('modul.show', compact('modul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul $modul)
    {
        return view('modul.edit', compact('modul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modul $modul)
    {
        $request->validate([
            'judul_modul' => 'required',
            'mata_kuliah' => 'required',
            'jenjang' => 'required',
            'tahun_terbit' => 'required'
        ]);

        $data = [
            'judul_modul' => $request->judul_modul,
            'mata_kuliah' => $request->mata_kuliah,
            'jenjang' => $request->jenjang,
            'tahun_terbit' => $request->tahun_terbit
        ];

        // Upload Cover Baru
        if ($request->hasFile('gambar')) {

            if ($modul->gambar && Storage::disk('public')->exists($modul->gambar)) {
                Storage::disk('public')->delete($modul->gambar);
            }

            $data['gambar'] = $request->file('gambar')
                ->store('gambar_modul', 'public');
        }

        // Upload PDF Baru
        if ($request->hasFile('file_modul')) {

            if ($modul->file_modul && Storage::disk('public')->exists($modul->file_modul)) {
                Storage::disk('public')->delete($modul->file_modul);
            }

            $data['file_modul'] = $request->file('file_modul')
                ->store('file_modul', 'public');
        }

        $modul->update($data);

        return redirect()
            ->route('modul.index')
            ->with('success', 'Modul berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        // Hapus file gambar jika ada
        if ($modul->gambar && Storage::disk('public')->exists($modul->gambar)) {
            Storage::disk('public')->delete($modul->gambar);
        }

        // Hapus file PDF jika ada
        if ($modul->file_modul && Storage::disk('public')->exists($modul->file_modul)) {
            Storage::disk('public')->delete($modul->file_modul);
        }

        // Hapus data
        $modul->delete();

        return redirect()
            ->route('modul.index')
            ->with('success', 'Modul berhasil dihapus.');
    }
}

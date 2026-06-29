@extends('layouts.admin')

@section('title', 'Detail Modul')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">📖 Detail Modul</h2>
        <p class="text-muted mb-0">
            Informasi lengkap modul pembelajaran.
        </p>
    </div>

    <a href="{{ route('modul.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

<div class="card shadow border-0 rounded-4">

    <div class="card-body p-4">

        <div class="row">

            <div class="col-md-4 text-center">

                <img
                    src="{{ asset('storage/' . $modul->gambar) }}"
                    class="img-fluid rounded shadow"
                    style="max-height:400px;">

            </div>

            <div class="col-md-8">

                <table class="table table-borderless">

                    <tr>
                        <th width="180">Judul Modul</th>
                        <td>: {{ $modul->judul_modul }}</td>
                    </tr>

                    <tr>
                        <th>Mata Kuliah</th>
                        <td>: {{ $modul->mata_kuliah }}</td>
                    </tr>

                    <tr>
                        <th>Jenjang</th>
                        <td>: {{ $modul->jenjang }}</td>
                    </tr>

                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: {{ $modul->tahun_terbit }}</td>
                    </tr>

                </table>

                <div class="mt-4">

                    <a href="{{ asset('storage/' . $modul->file_modul) }}"
                       target="_blank"
                       class="btn btn-danger">

                        <i class="bi bi-file-earmark-pdf-fill"></i>
                        Lihat PDF

                    </a>

                    <a href="{{ asset('storage/' . $modul->file_modul) }}"
                       download
                       class="btn btn-success">

                        <i class="bi bi-download"></i>
                        Download PDF

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
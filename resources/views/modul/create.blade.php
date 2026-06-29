@extends('layouts.admin')

@section('title', 'Tambah Modul')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">📚 Tambah Modul</h2>
        <p class="text-muted mb-0">
            Tambahkan modul pembelajaran baru.
        </p>
    </div>

    <a href="{{ route('modul.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow border-0 rounded-4">

    <div class="card-body p-4">

        <form action="{{ route('modul.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        🖼 Cover Modul
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control @error('gambar') is-invalid @enderror">

                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        📄 File PDF
                    </label>

                    <input
                        type="file"
                        name="file_modul"
                        class="form-control @error('file_modul') is-invalid @enderror">

                    @error('file_modul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    📚 Judul Modul
                </label>

                <input
                    type="text"
                    name="judul_modul"
                    value="{{ old('judul_modul') }}"
                    class="form-control @error('judul_modul') is-invalid @enderror">

                @error('judul_modul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    🎓 Mata Kuliah
                </label>

                <input
                    type="text"
                    name="mata_kuliah"
                    value="{{ old('mata_kuliah') }}"
                    class="form-control @error('mata_kuliah') is-invalid @enderror">

                @error('mata_kuliah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Jenjang
                    </label>

                    <select
                        name="jenjang"
                        class="form-select @error('jenjang') is-invalid @enderror">

                        <option value="">Pilih Jenjang</option>

                        <option value="D3" {{ old('jenjang') == 'D3' ? 'selected' : '' }}>
                            D3
                        </option>

                        <option value="S1" {{ old('jenjang') == 'S1' ? 'selected' : '' }}>
                            S1
                        </option>

                        <option value="S2" {{ old('jenjang') == 'S2' ? 'selected' : '' }}>
                            S2
                        </option>

                    </select>

                    @error('jenjang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Tahun Terbit
                    </label>

                    <input
                        type="number"
                        name="tahun_terbit"
                        min="2000"
                        max="{{ date('Y') }}"
                        value="{{ old('tahun_terbit', date('Y')) }}"
                        class="form-control @error('tahun_terbit') is-invalid @enderror">

                    @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-primary-custom">
                    <i class="bi bi-save"></i>
                    Simpan Modul
                </button>

                <a href="{{ route('modul.index') }}" class="btn btn-outline-secondary">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection
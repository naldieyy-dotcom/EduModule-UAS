@extends('layouts.admin')

@section('title', 'Edit Modul')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">✏️ Edit Modul</h2>
        <p class="text-muted mb-0">
            Perbarui data modul pembelajaran.
        </p>
    </div>

    <a href="{{ route('modul.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow border-0 rounded-4">

    <div class="card-body p-4">

        <form action="{{ route('modul.update', $modul->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        🖼 Cover Modul
                    </label>

                    @if($modul->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$modul->gambar) }}"
                                 width="120"
                                 class="img-thumbnail rounded">
                        </div>
                    @endif

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

                    @if($modul->file_modul)
                        <div class="mb-2">
                            <small class="text-success">
                                PDF saat ini tersedia
                            </small>
                        </div>
                    @endif

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
                    value="{{ old('judul_modul', $modul->judul_modul) }}"
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
                    value="{{ old('mata_kuliah', $modul->mata_kuliah) }}"
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

                        <option value="D3" {{ old('jenjang', $modul->jenjang) == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="S1" {{ old('jenjang', $modul->jenjang) == 'S1' ? 'selected' : '' }}>S1</option>
                        <option value="S2" {{ old('jenjang', $modul->jenjang) == 'S2' ? 'selected' : '' }}>S2</option>

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
                        value="{{ old('tahun_terbit', $modul->tahun_terbit) }}"
                        class="form-control @error('tahun_terbit') is-invalid @enderror">

                    @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            <button type="submit" class="btn btn-warning">
                <i class="bi bi-pencil-square"></i>
                Update Modul
            </button>

        </form>

    </div>

</div>

@endsection
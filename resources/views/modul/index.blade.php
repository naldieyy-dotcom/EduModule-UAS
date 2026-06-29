@extends('layouts.admin')

@section('title', 'Data Modul')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">📚 Data Modul</h2>
        <p class="text-muted mb-0">
            Kelola seluruh data modul pembelajaran.
        </p>
    </div>

    <a href="{{ route('modul.create') }}" class="btn btn-primary-custom">
        <i class="bi bi-plus-circle"></i> Tambah Modul
    </a>
</div>

<div class="card shadow border-0">

    <div class="card-body">

        <table id="tableModul" class="table table-hover align-middle">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Mata Kuliah</th>
                    <th>Jenjang</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse($moduls as $modul)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        @if($modul->gambar)

                            <img src="{{ asset('storage/' . $modul->gambar) }}"
                                 alt="Cover"
                                 width="70"
                                 class="img-thumbnail rounded">

                        @else

                            <span class="badge bg-secondary">
                                Belum Ada
                            </span>

                        @endif

                    </td>

                    <td>{{ $modul->judul_modul }}</td>

                    <td>{{ $modul->mata_kuliah }}</td>

                    <td>{{ $modul->jenjang }}</td>

                    <td>{{ $modul->tahun_terbit }}</td>

                    <td>

                        <a href="{{ route('modul.show', $modul->id) }}"
                           class="btn btn-sm btn-outline-primary">

                            <i class="bi bi-eye"></i>

                        </a>

                        <a href="{{ route('modul.edit', $modul->id) }}"
                           class="btn btn-sm btn-outline-warning">

                            <i class="bi bi-pencil"></i>

                        </a>

                        <form id="delete-form-{{ $modul->id }}"
                              action="{{ route('modul.destroy', $modul->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="button"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="confirmDelete({{ $modul->id }})">

                                <i class="bi bi-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="7" class="text-center text-muted py-5">

                        Belum ada data modul.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    if (document.querySelector('#tableModul tbody tr td[colspan]')) {
        return;
    }

    new DataTable('#tableModul');

});
</script>
@endpush
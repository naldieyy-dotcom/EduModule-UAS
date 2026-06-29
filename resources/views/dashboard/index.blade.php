@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="mb-4">
    <h2 class="fw-bold">Dashboard</h2>
</div>

<div class="card border-0 shadow rounded-4 mb-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h3 class="fw-bold">
                    👋 Selamat Datang, Administrator
                </h3>

                <p class="text-muted mb-3">
                    Kelola seluruh modul pembelajaran Universitas Pamulang
                    dengan mudah melalui sistem EduModule.
                </p>

            </div>

            <div class="col-md-4 text-center">

                <i class="bi bi-journal-richtext"
                   style="font-size:90px;color:#19376D;"></i>

            </div>

        </div>

    </div>

</div>

<div class="row g-4">

    <!-- Total Modul -->
    <div class="col-md-6 col-xl-3">
        <div class="card shadow border-0 rounded-4 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted">Total Modul</small>
                    <h2 class="fw-bold mb-0">{{ $totalModul }}</h2>
                </div>

                <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                    <i class="bi bi-book-fill fs-2 text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Mata Kuliah -->
    <div class="col-md-6 col-xl-3">
        <div class="card shadow border-0 rounded-4 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted">Mata Kuliah</small>
                    <h2 class="fw-bold mb-0">{{ $totalMatkul }}</h2>
                </div>

                <div class="bg-success bg-opacity-10 rounded-circle p-3">
                    <i class="bi bi-mortarboard-fill fs-2 text-success"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Jenjang -->
    <div class="col-md-6 col-xl-3">
        <div class="card shadow border-0 rounded-4 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted">Jenjang</small>
                    <h2 class="fw-bold mb-0">{{ $totalJenjang }}</h2>
                </div>

                <div class="bg-warning bg-opacity-10 rounded-circle p-3">
                    <i class="bi bi-collection-fill fs-2 text-warning"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Tahun Terbaru -->
    <div class="col-md-6 col-xl-3">
        <div class="card shadow border-0 rounded-4 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted">Tahun Terbaru</small>
                    <h2 class="fw-bold mb-0">{{ $tahunTerbaru }}</h2>
                </div>

                <div class="bg-danger bg-opacity-10 rounded-circle p-3">
                    <i class="bi bi-calendar-event-fill fs-2 text-danger"></i>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
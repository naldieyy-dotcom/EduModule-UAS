@extends('layouts.app')

@section('title', 'EduModule')

@section('content')

<div class="container py-5">

    <!-- Hero -->
    <div class="p-5 rounded shadow text-center text-white mb-5"
        style="background: linear-gradient(135deg,#19376D,#576CBC);">

        <h1 class="display-4 fw-bold">
            📚 EduModule
        </h1>

        <p class="lead">
            Sistem Informasi Modul Pembelajaran Universitas Pamulang
        </p>

        @guest
            <a href="{{ route('login') }}" class="btn btn-light btn-lg mt-3">
                <i class="bi bi-box-arrow-in-right"></i>
                Login Administrator
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg mt-3">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        @endguest

    </div>

    <!-- Tentang -->
    <section id="tentang" class="mb-5">

        <h2 class="fw-bold mb-3">
            Tentang EduModule
        </h2>

        <p class="text-muted">
            EduModule merupakan aplikasi berbasis Laravel yang digunakan untuk mengelola
            modul pembelajaran secara digital. Sistem ini memiliki fitur Login,
            Dashboard, CRUD Modul, Upload Cover, Upload PDF, dan Export PDF.
        </p>

    </section>

    <!-- Fitur -->
    <section class="mb-5">

        <h2 class="fw-bold text-center mb-4">
            Fitur Sistem
        </h2>

        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-book fs-1 text-primary"></i>
                        <h5 class="mt-3">CRUD Modul</h5>
                        <p>Tambah, Edit, Hapus, dan Lihat Modul.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-pdf fs-1 text-danger"></i>
                        <h5 class="mt-3">Export PDF</h5>
                        <p>Cetak laporan data modul ke PDF.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-shield-lock fs-1 text-success"></i>
                        <h5 class="mt-3">Authentication</h5>
                        <p>Login administrator dengan keamanan Laravel.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>



</div>

@endsection
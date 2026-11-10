@extends('layouts.admin')

@section('title', 'Pendaftaran Siswa Baru')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:35px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Pendaftaran Siswa Baru</h1>
            <p>Kelola data pendaftaran siswa berdasarkan jalur masuk.</p>
        </div>

        @if(session('success'))
        <div class="card" style="margin-bottom:20px; color:#1f6f5b;">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid">

            <div class="card">
                <h3>Pendaftar Prestasi</h3>
                <p>
                    Lihat dan verifikasi data siswa yang mendaftar
                    melalui Jalur Prestasi.
                </p>
                <a href="/admin/student-registrations/prestasi" class="btn">
                    Lihat Pendaftar →
                </a>
            </div>

            <div class="card">
                <h3>Pendaftar Tes</h3>
                <p>
                    Lihat dan verifikasi data siswa yang mendaftar
                    melalui Jalur Tes.
                </p>
                <a href="/admin/student-registrations/tes" class="btn">
                    Lihat Pendaftar →
                </a>
            </div>

            <div class="card">
                <h3>Arsip Pendaftar</h3>
                <p>
                    Lihat data pendaftar yang tidak lolos
                    dan telah dipindahkan ke arsip.
                </p>
                <a href="/admin/student-registrations/arsip" class="btn">
                    Lihat Arsip →
                </a>
            </div>

        </div>

    </div>
</section>

@endsection
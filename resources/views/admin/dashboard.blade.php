@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<section class="section">
    <div class="container">

        <div style="margin-bottom:35px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Dashboard</h1>
            <p>Kelola konten dan data sekolah dari sini.</p>
        </div>

        <div class="grid">

            <div class="card">
                <h3>Berita</h3>
                <p style="font-size:32px; font-weight:bold;">
                    {{ $postCount }}
                </p>
                <a href="/admin/posts" class="btn">Kelola Berita</a>
            </div>

            <div class="card">
                <h3>Kegiatan</h3>
                <p style="font-size:32px; font-weight:bold;">
                    {{ $activityCount }}
                </p>
                <a href="/admin/activities" class="btn">Kelola Kegiatan</a>
            </div>

            <div class="card">
                <h3>Ekstrakurikuler</h3>
                <p style="font-size:32px; font-weight:bold;">
                    {{ $extracurricularCount }}
                </p>
                <a href="/admin/extracurriculars" class="btn">Kelola Ekskul</a>
            </div>

            <div class="card">
                <h3>Pendaftar Ekskul</h3>
                <p style="font-size:32px; font-weight:bold;">
                    {{ $extracurricularRegistrationCount }}
                </p>
                <a href="/admin/extracurricular-registrations" class="btn">
                    Lihat Pendaftar
                </a>
            </div>

            <div class="card">
                <h3>Pendaftar Siswa Baru</h3>
                <p style="font-size:32px; font-weight:bold;">
                    {{ $studentRegistrationCount }}
                </p>
                <a href="/admin/student-registrations" class="btn">
                    Lihat Pendaftar
                </a>
            </div>

        </div>

        <div style="margin-top:40px;">
            <form action="/admin/logout" method="POST">
                @csrf

                <button type="submit" class="btn">
                    Logout
                </button>
            </form>
        </div>

    </div>
</section>
@endsection
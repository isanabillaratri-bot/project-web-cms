@extends('layouts.admin')

@section('title', 'Pendaftar Jalur Prestasi')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Pendaftar Jalur Prestasi</h1>
            <p>Daftar calon siswa yang memilih Jalur Prestasi.</p>
            <a href="/admin/student-registrations" class="btn">← Kembali</a>
        </div>

        @if(session('success'))
        <div class="card" style="margin-bottom:20px; color:#1f6f5b;">
            {{ session('success') }}
        </div>
        @endif

        @if($registrations->count())

        <div class="grid">

            @foreach($registrations as $registration)
            <div class="card">

                <p style="color:#6C4AB6; font-weight:bold;">
                    @if($registration->status === 'pending')
                    MENUNGGU VERIFIKASI
                    @elseif($registration->status === 'accepted')
                    LOLOS VERIFIKASI
                    @elseif($registration->status === 'rejected')
                    TIDAK LOLOS
                    @endif
                </p>

                <h3>{{ $registration->name }}</h3>

                <p><strong>NIK:</strong> {{ $registration->nik }}</p>
                <p><strong>Asal Sekolah:</strong> {{ $registration->school_origin }}</p>
                <p><strong>Nama Orang Tua:</strong> {{ $registration->parent_name }}</p>
                <p style="margin-bottom:20px;">
                    <strong>No. HP Orang Tua:</strong>
                    {{ $registration->parent_phone }}
                </p>

                <a href="/admin/student-registrations/{{ $registration->id }}" class="btn">
                    Lihat Detail →
                </a>

            </div>
            @endforeach

        </div>

        @else

        <div class="card" style="text-align:center;">
            <h3>Belum ada pendaftar Jalur Prestasi</h3>
            <p>Data pendaftar yang masuk akan muncul di sini.</p>
        </div>

        @endif

    </div>
</section>

@endsection
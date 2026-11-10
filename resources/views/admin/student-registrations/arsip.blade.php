@extends('layouts.admin')

@section('title', 'Arsip Pendaftar')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Arsip Pendaftar</h1>
            <p>Data pendaftar yang tidak lolos verifikasi dan telah diarsipkan.</p>
            <a href="/admin/student-registrations" class="btn">← Kembali</a>
        </div>

        @if($registrations->count())

        <div class="grid">

            @foreach($registrations as $registration)
            <div class="card">

                <p style="color:#B42318; font-weight:bold;">
                    TIDAK LOLOS
                </p>

                <h3>{{ $registration->name }}</h3>

                <p><strong>Jalur:</strong>
                    {{ $registration->admission_path === 'prestasi' ? 'Prestasi' : 'Tes' }}
                </p>

                <p><strong>NIK:</strong> {{ $registration->nik }}</p>
                <p><strong>Asal Sekolah:</strong> {{ $registration->school_origin }}</p>

                <a href="/admin/student-registrations/arsip/{{ $registration->id }}" class="btn">
                    Lihat Arsip →
                </a>

            </div>
            @endforeach

        </div>

        @else

        <div class="card" style="text-align:center;">
            <h3>Arsip masih kosong</h3>
            <p>Pendaftar yang tidak lolos akan muncul di sini.</p>
        </div>

        @endif

    </div>
</section>

@endsection
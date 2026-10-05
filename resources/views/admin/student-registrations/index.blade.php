@extends('layouts.admin')

@section('title', 'Pendaftaran Siswa Baru')

@section('content')
<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Pendaftaran Siswa Baru</h1>
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

                <p style="color:#1f6f5b; font-weight:bold;">
                    {{ strtoupper($registration->status) }}
                </p>

                <h3>{{ $registration->name }}</h3>

                <p>
                    <strong>NIK:</strong>
                    {{ $registration->nik }}
                </p>

                <p>
                    <strong>Asal Sekolah:</strong>
                    {{ $registration->school_origin }}
                </p>

                <p>
                    <strong>Nama Orang Tua:</strong>
                    {{ $registration->parent_name }}
                </p>

                <p style="margin-bottom:20px;">
                    <strong>No. HP Orang Tua:</strong>
                    {{ $registration->parent_phone }}
                </p>

                <a href="/admin/student-registrations/{{ $registration->id }}" class="btn">
                    Lihat Detail
                </a>

                <form action="/admin/student-registrations/{{ $registration->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn" onclick="return confirm('Hapus pendaftaran ini?')">
                        Hapus
                    </button>
                </form>

            </div>
            @endforeach

        </div>

        @else

        <div class="card" style="text-align:center;">
            <h3>Belum ada pendaftaran</h3>
            <p>Pendaftaran siswa yang masuk akan muncul di sini.</p>
        </div>

        @endif

    </div>
</section>
@endsection
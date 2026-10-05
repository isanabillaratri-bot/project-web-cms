@extends('layouts.admin')

@section('title', 'Pendaftaran Ekstrakurikuler')

@section('content')
<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Pendaftaran Ekstrakurikuler</h1>
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

                <h3>{{ $registration->student_name }}</h3>

                <p>
                    <strong>Ekstrakurikuler:</strong>
                    {{ $registration->extracurricular->name }}
                </p>

                <p>
                    <strong>Kelas:</strong>
                    {{ $registration->class }}
                </p>

                <p>
                    <strong>No. Siswa:</strong>
                    {{ $registration->student_number }}
                </p>

                <p style="margin-bottom:20px;">
                    <strong>No. HP:</strong>
                    {{ $registration->phone }}
                </p>

                <a href="/admin/extracurricular-registrations/{{ $registration->id }}" class="btn">
                    Lihat Detail
                </a>

                <form action="/admin/extracurricular-registrations/{{ $registration->id }}" method="POST" style="display:inline;">
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
            <p>Pendaftaran ekstrakurikuler yang masuk akan muncul di sini.</p>
        </div>

        @endif

    </div>
</section>
@endsection
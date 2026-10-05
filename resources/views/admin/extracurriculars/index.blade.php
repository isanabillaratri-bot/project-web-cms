@extends('layouts.admin')

@section('title', 'Kelola Ekstrakurikuler')

@section('content')
<section class="section">
    <div class="container">

        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
            <div>
                <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
                <h1>Kelola Ekstrakurikuler</h1>
            </div>

            <a href="/admin/extracurriculars/create" class="btn">
                + Tambah Ekstrakurikuler
            </a>
        </div>

        @if(session('success'))
        <div class="card" style="margin-bottom:20px; color:#1f6f5b;">
            {{ session('success') }}
        </div>
        @endif

        @if($extracurriculars->count())
        <div class="grid">

            @foreach($extracurriculars as $extracurricular)
            <div class="card">

                <p style="color:#1f6f5b; font-size:13px; font-weight:bold;">
                    {{ strtoupper($extracurricular->status) }}
                </p>

                <h3>{{ $extracurricular->name }}</h3>

                <p style="margin:10px 0;">
                    {{ \Illuminate\Support\Str::limit($extracurricular->description, 120) }}
                </p>

                <p><strong>Pembina:</strong> {{ $extracurricular->coach }}</p>
                <p><strong>Jadwal:</strong> {{ $extracurricular->schedule }}</p>
                <p><strong>Lokasi:</strong> {{ $extracurricular->location }}</p>
                <p style="margin-bottom:20px;">
                    <strong>Kuota:</strong> {{ $extracurricular->quota }}
                </p>

                <a href="/admin/extracurriculars/{{ $extracurricular->id }}/edit" class="btn">
                    Edit
                </a>

                <form action="/admin/extracurriculars/{{ $extracurricular->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn" onclick="return confirm('Hapus ekstrakurikuler ini?')">
                        Hapus
                    </button>
                </form>

            </div>
            @endforeach

        </div>
        @else
        <div class="card" style="text-align:center;">
            <h3>Belum ada ekstrakurikuler</h3>
            <p>Silakan tambahkan ekstrakurikuler baru.</p>
        </div>
        @endif

    </div>
</section>
@endsection
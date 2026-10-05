@extends('layouts.admin')

@section('title', 'Kelola Kegiatan')

@section('content')

<section class="section">
    <div class="container">

        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
            <div>
                <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
                <h1>Kelola Kegiatan</h1>
            </div>

            <a href="/admin/activities/create" class="btn">
                + Tambah Kegiatan
            </a>
        </div>

        @if(session('success'))
        <div class="card" style="margin-bottom:20px; color:#1f6f5b;">
            {{ session('success') }}
        </div>
        @endif

        @if($activities->count())
        <div class="grid">
            @foreach($activities as $activity)

            <div class="card">

                <p style="color:#1f6f5b; font-size:13px; font-weight:bold;">
                    {{ strtoupper($activity->status) }}
                </p>

                <h3>{{ $activity->title }}</h3>

                <p style="margin:10px 0;">
                    {{ \Illuminate\Support\Str::limit($activity->description, 120) }}
                </p>

                <p>
                    <strong>Tanggal:</strong>
                    {{ $activity->date }}
                </p>

                <p style="margin-bottom:20px;">
                    <strong>Lokasi:</strong>
                    {{ $activity->location }}
                </p>

                <a href="/admin/activities/{{ $activity->id }}/edit" class="btn">
                    Edit
                </a>

                <form action="/admin/activities/{{ $activity->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn" onclick="return confirm('Hapus kegiatan ini?')">
                        Hapus
                    </button>
                </form>

            </div>

            @endforeach
        </div>
        @else
        <div class="card" style="text-align:center;">
            <h3>Belum ada kegiatan</h3>
            <p>Silakan tambahkan kegiatan baru.</p>
        </div>
        @endif

    </div>
</section>

@endsection
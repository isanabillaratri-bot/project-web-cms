@extends('layouts.app')

@section('title', 'Kegiatan Sekolah')

@section('content')

{{-- HEADER --}}
<section style="
    background:#252333;
    color:white;
    padding:70px 0 65px;
">
    <div class="container">

        <p style="
            color:#F9C74F;
            font-weight:800;
            letter-spacing:2px;
            font-size:13px;
            margin-bottom:14px;
        ">
            AGENDA SEKOLAH
        </p>

        <h1 style="
            font-size:clamp(42px,6vw,68px);
            line-height:1;
            letter-spacing:-3px;
            margin-bottom:18px;
        ">
            Kegiatan Sekolah.
        </h1>

        <p style="
            color:#d8d5df;
            font-size:17px;
            max-width:600px;
        ">
            Berbagai kegiatan, acara, dan agenda
            yang berlangsung di Sekolah Kita.
        </p>

    </div>
</section>


{{-- DAFTAR KEGIATAN --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        @if($activities->count())

        <div style="
            display:flex;
            flex-direction:column;
            gap:18px;
        ">

            @foreach ($activities as $activity)

            <article style="
                background:white;
                border:1px solid #eee8d9;
                border-radius:24px;
                padding:26px;
                display:grid;
                grid-template-columns:100px 120px 1fr auto;
                align-items:center;
                gap:28px;
                box-shadow:0 8px 25px rgba(37,35,51,.05);
            ">

                {{-- TANGGAL --}}
                <div style="
                    background:#F9C74F;
                    border-radius:18px;
                    padding:18px 10px;
                    text-align:center;
                ">

                    <div style="
                        font-size:30px;
                        font-weight:900;
                        line-height:1;
                        color:#252333;
                    ">
                        {{ \Carbon\Carbon::parse($activity->date)->format('d') }}
                    </div>

                    <div style="
                        font-size:12px;
                        font-weight:800;
                        margin-top:6px;
                        color:#252333;
                        letter-spacing:1px;
                    ">
                        {{ strtoupper(\Carbon\Carbon::parse($activity->date)->format('M')) }}
                    </div>

                </div>

                {{-- FOTO --}}
                @if($activity->image)
                <div style="
                    width:120px;
                    height:120px;
                    border-radius:18px;
                    overflow:hidden;
                ">
                    <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" style="width:100%;height:100%;object-fit:cover;">
                </div>
                @endif


                {{-- INFORMASI --}}
                <div>

                    <p style="
                        color:#6C4AB6;
                        font-size:11px;
                        font-weight:800;
                        letter-spacing:1px;
                        margin-bottom:7px;
                    ">
                        KEGIATAN SEKOLAH
                    </p>

                    <h3 style="
                        font-size:24px;
                        line-height:1.2;
                        margin-bottom:8px;
                    ">
                        {{ $activity->title }}
                    </h3>

                    <p style="
                        color:#6F6B7A;
                        margin-bottom:8px;
                    ">
                        {{ \Illuminate\Support\Str::limit($activity->description, 150) }}
                    </p>

                    <p style="
                        font-size:13px;
                        color:#8A8694;
                    ">
                        📍 {{ $activity->location }}
                    </p>

                </div>


                {{-- TOMBOL --}}
                <div>

                    <a href="/activities/{{ $activity->id }}" style="
                        display:inline-block;
                        background:#6C4AB6;
                        color:white;
                        padding:12px 17px;
                        border-radius:10px;
                        font-size:13px;
                        font-weight:800;
                        white-space:nowrap;
                    ">
                        Lihat detail →
                    </a>

                </div>

            </article>

            @endforeach

        </div>

        @else

        <div class="card" style="
            text-align:center;
            padding:60px 30px;
        ">

            <div style="
                font-size:50px;
                margin-bottom:15px;
            ">
                ✦
            </div>

            <h3>
                Belum ada kegiatan
            </h3>

            <p style="
                margin-top:8px;
                color:#6F6B7A;
            ">
                Informasi kegiatan sekolah akan ditampilkan di sini.
            </p>

        </div>

        @endif

    </div>
</section>

@endsection
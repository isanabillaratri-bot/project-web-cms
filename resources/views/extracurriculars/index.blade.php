@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

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
            PENGEMBANGAN DIRI
        </p>

        <h1 style="
            font-size:clamp(42px,6vw,68px);
            line-height:1;
            letter-spacing:-3px;
            margin-bottom:18px;
        ">
            Temukan duniamu.
        </h1>

        <p style="
            color:#d8d5df;
            font-size:17px;
            max-width:600px;
        ">
            Temukan kegiatan yang sesuai dengan
            minat, bakat, dan hal yang ingin kamu kembangkan.
        </p>

    </div>
</section>


{{-- DAFTAR EKSTRAKURIKULER --}}
<section class="section" style="
    background:#FFFDF5;
">
    <div class="container">

        @if($extracurriculars->count())

        <div class="grid">

            @foreach ($extracurriculars as $extracurricular)

            <article class="ekskul-card ekskul-card-{{ $loop->index % 3 }}" style="
                    padding:0;
                    overflow:hidden;
                ">

                {{-- FOTO --}}
                @if($extracurricular->image)
                <div style="
                    width:100%;
                    height:210px;
                    background:#f5f2ea;
                    overflow:hidden;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                ">
                    <img src="{{ asset('storage/' . $extracurricular->image) }}" alt="{{ $extracurricular->name }}" style="
                    width:100%;
                    height:100%;
                    object-fit:cover;
                    display:block;
                ">
                </div>
                @else
                <div style="
                    width:100%;
                    height:210px;
                    background:rgba(255,255,255,.35);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:55px;
                ">
                    ★
                </div>
                @endif

                {{-- ISI --}}
                <div style="padding:25px 30px 30px;">

                    <span style="
                        font-size:11px;
                        font-weight:800;
                        letter-spacing:1px;
                    ">
                        EKSTRAKURIKULER
                    </span>

                    <h3 style="
                        font-size:28px;
                        line-height:1.1;
                        margin:8px 0 14px;
                    ">
                        {{ $extracurricular->name }}
                    </h3>

                    <p style="
                        color:#4f4a58;
                        font-size:14px;
                        margin-bottom:20px;
                    ">
                        {{ \Illuminate\Support\Str::limit($extracurricular->description, 110) }}
                    </p>

                    <p style="
                        font-size:13px;
                        font-weight:700;
                        margin-bottom:6px;
                    ">
                        👤 {{ $extracurricular->coach }}
                    </p>

                    <p style="
                        font-size:13px;
                        margin-bottom:20px;
                    ">
                        🕒 {{ $extracurricular->schedule }}
                    </p>

                    <a href="/extracurriculars/{{ $extracurricular->id }}" style="
                        display:inline-block;
                        background:#252333;
                        color:white;
                        padding:11px 17px;
                        border-radius:10px;
                        font-size:13px;
                        font-weight:800;
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
                ★
            </div>

            <h3>
                Belum ada ekstrakurikuler
            </h3>

            <p style="
                margin-top:8px;
                color:#6F6B7A;
            ">
                Informasi ekstrakurikuler akan ditampilkan di sini.
            </p>

        </div>

        @endif

    </div>
</section>

@endsection
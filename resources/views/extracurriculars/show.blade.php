@extends('layouts.app')

@section('title', $extracurricular->name)

@section('content')

{{-- HEADER --}}
<section style="
    background:#252333;
    color:white;
    padding:55px 0 50px;
">
    <div class="container" style="max-width:900px;">

        <p style="
            color:#F9C74F;
            font-weight:800;
            letter-spacing:2px;
            font-size:12px;
            margin-bottom:14px;
        ">
            EKSTRAKURIKULER
        </p>

        <h1 style="
            font-size:clamp(34px,5vw,56px);
            line-height:1.08;
            letter-spacing:-2px;
            margin-bottom:15px;
        ">
            {{ $extracurricular->name }}
        </h1>

        <p style="
            color:#bdb9c8;
            font-size:14px;
        ">
            Kegiatan pengembangan diri siswa di Sekolah Kita.
        </p>

    </div>
</section>


{{-- DETAIL --}}

<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <article style="
            max-width:1000px;
            margin:0 auto;
            background:white;
            border-radius:28px;
            padding:40px;
            border:1px solid #eee8d9;
            box-shadow:0 15px 40px rgba(37,35,51,.07);
            display:grid;
            grid-template-columns:1fr 380px;
            gap:40px;
            align-items:start;
        ">

            {{-- INFORMASI --}}
            <div>

                <div style="
                    width:64px;
                    height:64px;
                    border-radius:20px;
                    background:#F9C74F;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:28px;
                    margin-bottom:25px;
                ">
                    ★
                </div>

                <h2 style="
                    font-size:32px;
                    line-height:1.1;
                    margin-bottom:15px;
                ">
                    {{ $extracurricular->name }}
                </h2>

                <p style="
                    font-size:17px;
                    line-height:1.9;
                    color:#6F6B7A;
                    margin-bottom:30px;
                ">
                    {{ $extracurricular->description }}
                </p>

                {{-- INFO --}}
                <div style="
                    display:grid;
                    grid-template-columns:1fr 1fr;
                    gap:15px;
                    margin-bottom:30px;
                ">

                    <div style="
                        background:#F9C74F;
                        border-radius:18px;
                        padding:20px;
                    ">
                        <p style="font-size:11px;font-weight:800;letter-spacing:1px;margin-bottom:6px;">
                            PEMBINA
                        </p>
                        <p style="font-size:16px;font-weight:800;">
                            👤 {{ $extracurricular->coach }}
                        </p>
                    </div>

                    <div style="
                        background:#F7A8B8;
                        border-radius:18px;
                        padding:20px;
                    ">
                        <p style="font-size:11px;font-weight:800;letter-spacing:1px;margin-bottom:6px;">
                            JADWAL
                        </p>
                        <p style="font-size:16px;font-weight:800;">
                            📅 {{ $extracurricular->schedule }}
                        </p>
                    </div>

                    <div style="
                        background:#A9D6E5;
                        border-radius:18px;
                        padding:20px;
                    ">
                        <p style="font-size:11px;font-weight:800;letter-spacing:1px;margin-bottom:6px;">
                            LOKASI
                        </p>
                        <p style="font-size:16px;font-weight:800;">
                            📍 {{ $extracurricular->location }}
                        </p>
                    </div>

                    <div style="
                        background:#E8DDF8;
                        border-radius:18px;
                        padding:20px;
                    ">
                        <p style="font-size:11px;font-weight:800;letter-spacing:1px;margin-bottom:6px;">
                            KUOTA
                        </p>
                        <p style="font-size:16px;font-weight:800;">
                            👥 {{ $extracurricular->quota }} siswa
                        </p>
                    </div>

                </div>

                {{-- ACTION --}}
                <div style="
                    display:flex;
                    gap:12px;
                    flex-wrap:wrap;
                ">
                    <a href="/extracurriculars/{{ $extracurricular->id }}/register" class="btn">
                        Daftar Ekstrakurikuler →
                    </a>

                    <a href="/extracurriculars" class="btn" style="
                        background:#252333;
                    ">
                        ← Kembali
                    </a>
                </div>

            </div>


            {{-- FOTO --}}
            @if($extracurricular->image)
            <div style="
                    width:100%;
                    min-height:420px;
                    background:#f5f2ea;
                    border-radius:22px;
                    overflow:hidden;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                ">
                <img src="{{ asset('storage/' . $extracurricular->image) }}" alt="{{ $extracurricular->name }}" style="
                            width:100%;
                            height:100%;
                            max-height:600px;
                            object-fit:contain;
                            display:block;
                        ">
            </div>
            @else
            <div style="
                    width:100%;
                    min-height:420px;
                    background:#F9C74F;
                    border-radius:22px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:80px;
                ">
                ★
            </div>
            @endif

        </article>

    </div>
</section>

@endsection
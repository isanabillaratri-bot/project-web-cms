@extends('layouts.app')

@section('title', $activity->title)

@section('content')

<style>
    .activity-detail {
        max-width: 1000px;
        margin: 0 auto;
        background: white;
        border-radius: 28px;
        padding: 40px;
        border: 1px solid #eee8d9;
        box-shadow: 0 15px 40px rgba(37, 35, 51, .07);
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 380px);
        gap: 40px;
        align-items: start;
    }

    .activity-description {
        font-size: 17px;
        line-height: 1.9;
        color: #252333;
        margin-bottom: 30px;
        overflow-wrap: anywhere;
        white-space: pre-line;
    }

    .activity-poster {
        width: 100%;
        min-height: 300px;
        background: #f5f2ea;
        border-radius: 22px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .activity-poster img {
        width: 100%;
        max-height: 600px;
        object-fit: contain;
        display: block;
    }

    @media (max-width: 768px) {
        .activity-detail {
            grid-template-columns: minmax(0, 1fr);
            padding: 22px;
            gap: 28px;
            border-radius: 20px;
        }

        .activity-description {
            font-size: 15px;
        }

        .activity-poster {
            min-height: 200px;
        }
    }
</style>

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
            AGENDA SEKOLAH
        </p>

        <h1 style="
            font-size:clamp(34px,5vw,56px);
            line-height:1.08;
            letter-spacing:-2px;
            margin-bottom:15px;
        ">
            {{ $activity->title }}
        </h1>

        <p style="color:#bdb9c8;font-size:13px;">
            {{ \Carbon\Carbon::parse($activity->date)->format('d M Y') }}
        </p>

    </div>
</section>

{{-- DETAIL --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <article class="activity-detail">

            {{-- INFORMASI --}}
            <div>

                <p style="
                    color:#6C4AB6;
                    font-size:12px;
                    font-weight:800;
                    letter-spacing:1px;
                    margin-bottom:12px;
                ">
                    TENTANG KEGIATAN
                </p>

                <div class="activity-description">{{ $activity->description }}</div>

                {{-- INFO --}}
                <div style="
                    display:grid;
                    grid-template-columns:1fr;
                    gap:15px;
                    margin-bottom:30px;
                ">

                    <div style="
                        background:#F9C74F;
                        border-radius:18px;
                        padding:20px;
                    ">
                        <p style="
                            font-size:11px;
                            font-weight:800;
                            letter-spacing:1px;
                            margin-bottom:6px;
                        ">
                            TANGGAL
                        </p>

                        <p style="font-size:17px;font-weight:800;">
                            📅 {{ \Carbon\Carbon::parse($activity->date)->format('d M Y') }}
                        </p>
                    </div>

                    <div style="
                        background:#A9D6E5;
                        border-radius:18px;
                        padding:20px;
                    ">
                        <p style="
                            font-size:11px;
                            font-weight:800;
                            letter-spacing:1px;
                            margin-bottom:6px;
                        ">
                            LOKASI
                        </p>

                        <p style="font-size:17px;font-weight:800;">
                            📍 {{ $activity->location }}
                        </p>
                    </div>

                </div>

                <a href="/activities" class="btn" style="background:#252333;">
                    ← Kembali ke Kegiatan
                </a>

            </div>

            {{-- POSTER / FOTO --}}
            @if($activity->image)
            <div class="activity-poster">
                <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}">
            </div>
            @endif

        </article>

    </div>
</section>

@endsection
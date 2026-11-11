@extends('layouts.app')

@section('title', 'Berita Sekolah')

@section('content')

<style>
    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        width: 100%;
    }

    .news-card {
        min-width: 0;
        overflow: hidden;
        position: relative;
        background: white;
        border-radius: 18px;
    }

    .news-image {
        height: 180px;
        overflow: hidden;
        background: #eee8d9;
    }

    .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .news-content {
        padding: 26px;
        min-width: 0;
    }

    .news-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 15px;
    }

    .news-title {
        font-size: 22px;
        line-height: 1.25;
        margin-bottom: 12px;
        overflow-wrap: anywhere;
    }

    .news-description {
        color: #6F6B7A;
        margin-bottom: 22px;
        overflow-wrap: anywhere;
    }

    @media (max-width: 768px) {
        .news-grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 20px;
        }

        .news-content {
            padding: 20px;
        }

        .news-title {
            font-size: 20px;
        }
    }
</style>

{{-- HEADER --}}
<section style="
    background:#252333;
    color:white;
    padding:90px 0 75px;
">
    <div class="container">

        <p style="
            color:#F9C74F;
            font-weight:800;
            letter-spacing:2px;
            font-size:13px;
            margin-bottom:14px;
        ">
            INFORMASI SEKOLAH
        </p>

        <h1 style="
            font-size:clamp(42px,6vw,68px);
            line-height:1;
            letter-spacing:-3px;
            margin-bottom:18px;
        ">
            Berita Sekolah.
        </h1>

        <p style="
            color:#d8d5df;
            font-size:17px;
            max-width:600px;
        ">
            Informasi, cerita, dan kabar terbaru
            dari Sekolah Kita.
        </p>

    </div>
</section>

{{-- DAFTAR BERITA --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        @if($posts->count())

        <div class="news-grid">

            @foreach($posts as $post)

            <article class="news-card">

                {{-- FOTO BERITA --}}
                <div class="news-image">
                    @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                    @else
                    <div style="
                            height:100%;
                            background:linear-gradient(135deg,#A9D6E5,#F7A8B8);
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:60px;
                        ">
                        ✦
                    </div>
                    @endif
                </div>

                {{-- CONTENT --}}
                <div class="news-content">

                    <div class="news-meta">

                        <span style="
                            background:#F9C74F;
                            color:#252333;
                            padding:6px 11px;
                            border-radius:20px;
                            font-size:11px;
                            font-weight:800;
                        ">
                            BERITA
                        </span>

                        <span style="
                            color:#8A8694;
                            font-size:12px;
                        ">
                            {{ $post->created_at->format('d M Y') }}
                        </span>

                    </div>

                    <h3 class="news-title">
                        {{ $post->title }}
                    </h3>

                    <p class="news-description">
                        {{ \Illuminate\Support\Str::limit($post->content, 140) }}
                    </p>

                    <a href="/posts/{{ $post->slug }}" style="
                        color:#6C4AB6;
                        font-weight:800;
                    ">
                        Baca selengkapnya →
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

            <h3>Belum ada berita</h3>

            <p style="
                margin-top:8px;
                color:#6F6B7A;
            ">
                Berita sekolah akan ditampilkan di sini.
            </p>
        </div>

        @endif

    </div>
</section>

@endsection
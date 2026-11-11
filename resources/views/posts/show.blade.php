@extends('layouts.app')

@section('title', $post->title)

@section('content')

<style>
    .news-detail {
        width: 100%;
        max-width: 1000px;
        min-width: 0;
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

    .news-detail-content {
        min-width: 0;
        overflow-wrap: anywhere;
        font-size: 17px;
        line-height: 1.9;
        color: #252333;
    }

    .news-detail-content a {
        color: #6C4AB6;
        text-decoration: underline;
        overflow-wrap: anywhere;
        font-weight: 600;
    }

    .news-detail-content a:hover {
        color: #4b328b;
    }

    .news-detail-image {
        width: 100%;
        min-width: 0;
        min-height: 300px;
        background: #f5f2ea;
        border-radius: 22px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .news-detail-image img {
        width: 100%;
        max-height: 600px;
        object-fit: contain;
        display: block;
    }

    @media (max-width: 768px) {
        .news-detail {
            grid-template-columns: minmax(0, 1fr);
            gap: 25px;
            padding: 22px;
            border-radius: 20px;
        }

        .news-detail-content {
            font-size: 16px;
        }

        .news-detail-image {
            min-height: 200px;
        }
    }
</style>

{{-- HEADER BERITA --}}
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
            BERITA SEKOLAH
        </p>

        <h1 style="
            font-size:clamp(34px,5vw,56px);
            line-height:1.08;
            letter-spacing:-2px;
            margin-bottom:15px;
            overflow-wrap:anywhere;
        ">
            {{ $post->title }}
        </h1>

        <p style="color:#bdb9c8;font-size:13px;">
            {{ $post->created_at->format('d M Y') }}
        </p>

    </div>
</section>

{{-- ISI BERITA --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <article class="news-detail">

            {{-- ISI --}}
            <div style="min-width:0;">

                <p style="
                    color:#6C4AB6;
                    font-size:12px;
                    font-weight:800;
                    letter-spacing:1px;
                    margin-bottom:12px;
                ">
                    BERITA SEKOLAH
                </p>

                <div class="news-detail-content">
                    @php
                    $content = e($post->content);

                    $content = preg_replace_callback(
                    '~https?://[^\s<]+~i', function ($matches) { $url=rtrim($matches[0], '.,;:!?)]}' ); $ending=substr($matches[0], strlen($url)); return '<a href="' . $url . '" target="_blank" rel="noopener noreferrer">' . $url . '</a>' . $ending; }, $content ); @endphp {!! nl2br($content) !!} </div>

                        <div style="
                    margin-top:35px;
                    padding-top:25px;
                    border-top:1px solid #eee8d9;
                ">
                            <p style="
                        color:#6F6B7A;
                        font-size:13px;
                        margin-bottom:20px;
                    ">
                                Status:
                                <strong style="color:#6C4AB6;">
                                    {{ $post->status }}
                                </strong>
                            </p>

                            <a href="/posts" class="btn" style="
                        background:#252333;
                    ">
                                ← Kembali ke Berita
                            </a>
                        </div>

                </div>

                {{-- FOTO BERITA --}}
                @if($post->image)
                <div class="news-detail-image">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                </div>
                @endif

        </article>

    </div>
</section>

@endsection
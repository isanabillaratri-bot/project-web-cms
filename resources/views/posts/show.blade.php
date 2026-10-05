@extends('layouts.app')

@section('title', $post->title)

@section('content')

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
        ">
            {{ $post->title }}
        </h1>

        <p style="
            color:#bdb9c8;
            font-size:13px;
        ">
            {{ $post->created_at->format('d M Y') }}
        </p>

    </div>
</section>


{{-- ISI BERITA --}}

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

            {{-- ISI --}}
            <div>

                <p style="
                    color:#6C4AB6;
                    font-size:12px;
                    font-weight:800;
                    letter-spacing:1px;
                    margin-bottom:12px;
                ">
                    BERITA SEKOLAH
                </p>

                <div style="
                    font-size:17px;
                    line-height:1.9;
                    color:#252333;
                    white-space:pre-line;
                ">
                    {{ $post->content }}
                </div>

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
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="
                            width:100%;
                            height:100%;
                            max-height:600px;
                            object-fit:contain;
                            display:block;
                        ">
            </div>
            @endif

        </article>

    </div>
</section>

@endsection
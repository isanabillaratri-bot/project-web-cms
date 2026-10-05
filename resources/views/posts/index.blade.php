@extends('layouts.app')

@section('title', 'Berita Sekolah')

@section('content')

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
<section class="section" style="
    background:#FFFDF5;
">
    <div class="container">

        @if($posts->count())

        <div class="grid">

            @foreach($posts as $post)

            <article class="card" style="
                padding:0;
                overflow:hidden;
                position:relative;
            ">

                {{-- FOTO BERITA --}}
                <div style="
                    height:180px;
                    overflow:hidden;
                    background:#eee8d9;
                ">
                    @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width:100%;height:100%;object-fit:cover;">
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
                <div style="padding:26px;">

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        gap:10px;
                        margin-bottom:15px;
                    ">

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

                    <h3 style="
                        font-size:22px;
                        line-height:1.25;
                        margin-bottom:12px;
                    ">
                        {{ $post->title }}
                    </h3>

                    <p style="
                        color:#6F6B7A;
                        margin-bottom:22px;
                    ">
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

            <h3>
                Belum ada berita
            </h3>

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
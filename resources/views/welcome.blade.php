@extends('layouts.app')

@section('title', 'Beranda - Sekolah Kita')

@section('content')

{{-- HERO --}}

<section style="
    min-height: 720px;
    display:flex;
    align-items:center;
    position:relative;
    overflow:hidden;
    background: url('/images/sekolah.jpg') center/cover no-repeat;
">

    <div style="
        position:absolute;
        inset:0;
        background:rgba(37,35,51,.45);
        z-index:1;
    ">
    </div>

    <div class="container" style="position:relative; z-index:2;">

        <div style="max-width:700px; color:white; padding-top:60px;">

            <p style="
                color:#F9C74F;
                font-weight:800;
                letter-spacing:2px;
                margin-bottom:18px;
                font-size:14px;
            ">
                WEBSITE RESMI SEKOLAH
            </p>

            <h1 style="
                font-size:clamp(48px, 7vw, 82px);
                line-height:1;
                letter-spacing:-3px;
                margin-bottom:28px;
                font-weight:800;
            ">
                Tempat Tumbuhnya
                <span style="color:#F9C74F;">
                    Generasi Masa Depan.
                </span>
            </h1>

            <p style="
                font-size:18px;
                color:#f3f1f7;
                max-width:590px;
                margin-bottom:32px;
            ">
                Informasi sekolah, berita, kegiatan,
                ekstrakurikuler, dan layanan pendaftaran
                siswa dalam satu tempat.
            </p>

            <div style="
                display:flex;
                gap:14px;
                flex-wrap:wrap;
            ">

                <a href="/pendaftaran-siswa" class="btn" style="
                       background:#F9C74F;
                       color:#252333 !important;
                       padding:14px 24px;
                   ">
                    Daftar Siswa →
                </a>

                <a href="/activities" class="btn" style="
                       background:transparent;
                       color:white !important;
                       border:1px solid rgba(255,255,255,.5);
                       padding:14px 24px;
                   ">
                    Lihat Kegiatan
                </a>

            </div>

        </div>

    </div>

    {{-- dekorasi --}}
    <div style="
        position:absolute;
        width:420px;
        height:420px;
        border-radius:50%;
        background:#F7A8B8;
        opacity:.25;
        right:-120px;
        bottom:-160px;
    "></div>

    <div style="
        position:absolute;
        width:220px;
        height:220px;
        border-radius:50%;
        background:#F9C74F;
        opacity:.18;
        right:18%;
        top:20%;
    "></div>

</section>

{{-- TENTANG KAMI --}}

<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <div style="
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:70px;
            align-items:center;
        ">

            <div>

                <p style="
                    color:#6C4AB6;
                    font-weight:800;
                    letter-spacing:2px;
                    margin-bottom:12px;
                    font-size:13px;
                ">
                    TENTANG SEKOLAH KITA
                </p>

                <h2 style="
                    font-size:clamp(36px,5vw,58px);
                    line-height:1.05;
                    letter-spacing:-2px;
                    margin-bottom:25px;
                ">
                    Belajar bukan cuma
                    <span style="color:#6C4AB6;">
                        tentang nilai.
                    </span>
                </h2>

                <p style="
                    color:#6F6B7A;
                    font-size:17px;
                    max-width:520px;
                    margin-bottom:28px;
                ">
                    Sekolah Kita merupakan tempat bagi siswa
                    untuk mengembangkan pengetahuan, keterampilan,
                    kreativitas, dan karakter melalui berbagai
                    kegiatan pembelajaran maupun kegiatan
                    di luar kelas.
                </p>

                <a href="/kontak" class="btn" style="
                       background:#252333;
                       padding:13px 22px;
                   ">
                    Kenali Kami →
                </a>

            </div>

            <div style="
                position:relative;
                min-height:390px;
            ">

                <div style="
                    position:absolute;
                    width:280px;
                    height:280px;
                    background:#A9D6E5;
                    border-radius:40% 60% 55% 45%;
                    right:20px;
                    top:35px;
                    transform:rotate(8deg);
                "></div>

                <div style="
                    position:absolute;
                    width:250px;
                    height:250px;
                    background:#F7A8B8;
                    border-radius:55% 45% 40% 60%;
                    left:35px;
                    bottom:10px;
                    transform:rotate(-10deg);
                "></div>

                <div style="
                    position:absolute;
                    width:180px;
                    height:180px;
                    background:#F9C74F;
                    border-radius:50%;
                    right:80px;
                    bottom:20px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:70px;
                    font-weight:900;
                    color:#252333;
                    box-shadow:0 20px 40px rgba(37,35,51,.12);
                ">
                    S
                </div>

                <div style="
                    position:absolute;
                    left:10px;
                    top:20px;
                    background:white;
                    padding:18px 22px;
                    border-radius:16px;
                    box-shadow:0 15px 35px rgba(37,35,51,.1);
                    font-weight:700;
                    color:#252333;
                ">
                    ✦ Belajar
                </div>

                <div style="
                    position:absolute;
                    right:0;
                    top:125px;
                    background:white;
                    padding:18px 22px;
                    border-radius:16px;
                    box-shadow:0 15px 35px rgba(37,35,51,.1);
                    font-weight:700;
                    color:#252333;
                ">
                    ✦ Berkarya
                </div>

                <div style="
                    position:absolute;
                    left:70px;
                    bottom:5px;
                    background:white;
                    padding:18px 22px;
                    border-radius:16px;
                    box-shadow:0 15px 35px rgba(37,35,51,.1);
                    font-weight:700;
                    color:#252333;
                ">
                    ✦ Berkembang
                </div>

            </div>

        </div>

    </div>
</section>

{{-- STATISTIK --}}

<section style="
    padding:70px 0;
    background:#252333;
    color:white;
">
    <div class="container">

        <div style="
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:18px;
        ">

            <div style="
                background:#F9C74F;
                color:#252333;
                border-radius:24px;
                padding:30px;
                min-height:170px;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
            ">
                <span style="font-size:14px; font-weight:700;">
                    BERITA
                </span>

                <div>
                    <h2 style="font-size:48px; line-height:1;">
                        {{ $posts->count() }}
                    </h2>
                    <p style="margin-top:8px;">
                        Berita terbaru
                    </p>
                </div>
            </div>


            <div style="
                background:#F7A8B8;
                color:#252333;
                border-radius:24px;
                padding:30px;
                min-height:170px;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
            ">
                <span style="font-size:14px; font-weight:700;">
                    AGENDA
                </span>

                <div>
                    <h2 style="font-size:48px; line-height:1;">
                        {{ $activities->count() }}
                    </h2>
                    <p style="margin-top:8px;">
                        Kegiatan sekolah
                    </p>
                </div>
            </div>


            <div style="
                background:#A9D6E5;
                color:#252333;
                border-radius:24px;
                padding:30px;
                min-height:170px;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
            ">
                <span style="font-size:14px; font-weight:700;">
                    MINAT & BAKAT
                </span>

                <div>
                    <h2 style="font-size:48px; line-height:1;">
                        {{ $extracurriculars->count() }}
                    </h2>
                    <p style="margin-top:8px;">
                        Ekstrakurikuler
                    </p>
                </div>
            </div>


            <div style="
                background:#6C4AB6;
                color:white;
                border-radius:24px;
                padding:30px;
                min-height:170px;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
            ">
                <span style="font-size:14px; font-weight:700;">
                    SEKOLAH KITA
                </span>

                <div>
                    <h2 style="font-size:48px; line-height:1;">
                        1
                    </h2>
                    <p style="margin-top:8px; color:#eee8ff;">
                        Portal sekolah
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- BERITA --}}

<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <div style="
            display:flex;
            justify-content:space-between;
            align-items:end;
            gap:20px;
            margin-bottom:35px;
        ">

            <div>
                <p style="
                    color:#6C4AB6;
                    font-weight:800;
                    letter-spacing:2px;
                    font-size:13px;
                    margin-bottom:10px;
                ">
                    INFORMASI
                </p>

                <h2 style="
                    font-size:clamp(36px,5vw,52px);
                    line-height:1;
                    letter-spacing:-2px;
                ">
                    Berita Terbaru
                </h2>

                <p style="
                    color:#6F6B7A;
                    margin-top:12px;
                ">
                    Cerita dan informasi terbaru dari Sekolah Kita.
                </p>
            </div>

            <a href="/posts" style="
                   color:#6C4AB6;
                   font-weight:800;
                   white-space:nowrap;
               ">
                Lihat semua →
            </a>

        </div>


        <div class="grid">

            @foreach($posts->take(3) as $post)

            <div class="card" style="
                padding:0;
                overflow:hidden;
                position:relative;
            ">

                <div style="
                    height:190px;
                    background:#f5f2ea;
                    overflow:hidden;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                ">
                    @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="
                        width:100%;
                        height:100%;
                        object-fit:cover;
                        display:block;
                    ">
                    @else
                    <div style="
                        width:100%;
                        height:100%;
                        background:#A9D6E5;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-size:60px;
                        color:#252333;
                    ">
                        ✦
                    </div>
                    @endif
                </div>

                <div style="padding:25px;">

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        gap:10px;
                        margin-bottom:14px;
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
                            {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}
                        </span>

                    </div>

                    <h3 style="
                        font-size:21px;
                        line-height:1.3;
                        margin-bottom:12px;
                    ">
                        {{ $post->title }}
                    </h3>

                    <p style="
                        color:#6F6B7A;
                        margin-bottom:20px;
                    ">
                        {{ \Illuminate\Support\Str::limit($post->content, 110) }}
                    </p>

                    <a href="/posts/{{ $post->slug }}" style="
                           color:#6C4AB6;
                           font-weight:800;
                       ">
                        Baca selengkapnya →
                    </a>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

{{-- KEGIATAN --}}

<section class="section" style="background:#A9D6E5;">
    <div class="container">

        <div style="
            display:flex;
            justify-content:space-between;
            align-items:end;
            gap:20px;
            margin-bottom:35px;
        ">

            <div>
                <p style="
                    color:#6C4AB6;
                    font-weight:800;
                    letter-spacing:2px;
                    font-size:13px;
                    margin-bottom:10px;
                ">
                    AGENDA
                </p>

                <h2 style="
                    font-size:clamp(36px,5vw,52px);
                    line-height:1;
                    letter-spacing:-2px;
                ">
                    Kegiatan Sekolah
                </h2>

                <p style="
                    color:#4f5964;
                    margin-top:12px;
                ">
                    Jangan cuma dengar ceritanya. Ikut jadi bagian di dalamnya.
                </p>
            </div>

            <a href="/activities" style="
                   color:#6C4AB6;
                   font-weight:800;
                   white-space:nowrap;
               ">
                Lihat semua →
            </a>

        </div>


        <div style="
            display:grid;
            gap:18px;
        ">

            @foreach($activities->take(3) as $activity)

            <div style="
                background:#FFFDF5;
                border-radius:24px;
                padding:24px;
                display:grid;
                grid-template-columns:110px 1fr auto;
                align-items:center;
                gap:25px;
                box-shadow:0 12px 30px rgba(37,35,51,.08);
            ">

                {{-- TANGGAL --}}
                <div style="
                    background:#F9C74F;
                    border-radius:18px;
                    padding:16px;
                    text-align:center;
                ">

                    <div style="
                        font-size:13px;
                        font-weight:800;
                        color:#6C4AB6;
                    ">
                        {{ \Carbon\Carbon::parse($activity->date)->format('M') }}
                    </div>

                    <div style="
                        font-size:38px;
                        line-height:1;
                        font-weight:900;
                        margin-top:3px;
                    ">
                        {{ \Carbon\Carbon::parse($activity->date)->format('d') }}
                    </div>

                </div>


                {{-- INFO --}}
                <div>

                    <h3 style="
                        font-size:22px;
                        margin-bottom:7px;
                    ">
                        {{ $activity->title }}
                    </h3>

                    <p style="
                        color:#6F6B7A;
                        margin-bottom:8px;
                    ">
                        {{ \Illuminate\Support\Str::limit($activity->description, 120) }}
                    </p>

                    <p style="
                        color:#6C4AB6;
                        font-size:14px;
                        font-weight:700;
                    ">
                        📍 {{ $activity->location }}
                    </p>

                </div>


                {{-- DETAIL --}}
                <a href="/activities/{{ $activity->id }}" style="
                       width:48px;
                       height:48px;
                       border-radius:50%;
                       background:#6C4AB6;
                       color:white;
                       display:flex;
                       align-items:center;
                       justify-content:center;
                       font-size:20px;
                       font-weight:bold;
                   ">
                    →
                </a>

            </div>

            @endforeach

        </div>

    </div>
</section>

{{-- EKSTRAKURIKULER --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <div style="
            display:flex;
            justify-content:space-between;
            align-items:end;
            gap:20px;
            margin-bottom:35px;
        ">
            <div>
                <p style="
                    color:#6C4AB6;
                    font-weight:800;
                    letter-spacing:2px;
                    font-size:13px;
                    margin-bottom:10px;
                ">
                    PENGEMBANGAN DIRI
                </p>

                <h2 style="
                    font-size:clamp(36px,5vw,52px);
                    line-height:1;
                    letter-spacing:-2px;
                ">
                    Temukan duniamu.
                </h2>

                <p style="
                    color:#6F6B7A;
                    margin-top:12px;
                ">
                    Belajar sesuatu yang kamu suka, bertemu orang baru,
                    dan berkembang di luar kelas.
                </p>
            </div>

            <a href="/extracurriculars" style="
                color:#6C4AB6;
                font-weight:800;
                white-space:nowrap;
            ">
                Lihat semua →
            </a>
        </div>

        <div class="ekskul-grid">

            @foreach($extracurriculars->take(3) as $extracurricular)

            <div class="ekskul-card ekskul-card-{{ $loop->index }}">

                @if($extracurricular->image)
                <div style="
        width:100%;
        height:150px;
        border-radius:18px;
        overflow:hidden;
        margin-bottom:25px;
        background:rgba(255,255,255,.35);
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
                    width:58px;
                    height:58px;
                    border-radius:18px;
                    background:rgba(255,255,255,.65);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:25px;
                    margin-bottom:25px;
                ">
                    ★
                </div>
                @endif

                <span style="
                        font-size:12px;
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
                    ">
                    {{ \Illuminate\Support\Str::limit($extracurricular->description, 100) }}
                </p>
            </div>

            <div>
                <p style="
                        font-size:13px;
                        font-weight:700;
                        margin-bottom:6px;
                    ">
                    👤 {{ $extracurricular->coach }}
                </p>

                <p style="
                        font-size:13px;
                        margin-bottom:18px;
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
                    Lihat Ekstrakurikuler →
                </a>
            </div>

        </div>

        @endforeach

    </div>

    </div>
</section>

{{-- CTA PENDAFTARAN --}}
<section style="
    padding:40px 0 90px;
    background:#FFFDF5;
">
    <div class="container">

        <div style="
            position:relative;
            overflow:hidden;
            background:#6C4AB6;
            color:white;
            border-radius:32px;
            padding:60px;
        ">

            {{-- dekorasi --}}
            <div style="
                position:absolute;
                width:220px;
                height:220px;
                border-radius:50%;
                background:#F9C74F;
                opacity:.25;
                right:-70px;
                top:-80px;
            "></div>

            <div style="
                position:absolute;
                width:140px;
                height:140px;
                border-radius:50%;
                background:#F7A8B8;
                opacity:.25;
                left:-45px;
                bottom:-50px;
            "></div>

            <div style="
                position:relative;
                z-index:2;
                max-width:700px;
            ">
                <p style="
                    color:#F9C74F;
                    font-weight:800;
                    letter-spacing:2px;
                    font-size:13px;
                    margin-bottom:12px;
                ">
                    PENERIMAAN SISWA
                </p>

                <h2 style="
                    font-size:clamp(36px,5vw,58px);
                    line-height:1;
                    letter-spacing:-2px;
                    margin-bottom:20px;
                ">
                    Siap menjadi bagian dari
                    <span style="color:#F9C74F;">
                        Sekolah Kita?
                    </span>
                </h2>

                <p style="
                    color:#eee8ff;
                    font-size:17px;
                    max-width:580px;
                    margin-bottom:30px;
                ">
                    Lengkapi data pendaftaran siswa melalui
                    layanan pendaftaran online kami.
                </p>

                <div style="
                    display:flex;
                    gap:12px;
                    flex-wrap:wrap;
                ">

                    <a href="/pendaftaran-siswa" class="btn" style="
                        background:#F9C74F;
                        color:#252333 !important;
                        padding:14px 24px;
                    ">
                        Mulai Pendaftaran →
                    </a>

                    <a href="/cek-status-pendaftaran" style="
                        display:inline-block;
                        background:white;
                        color:#6C4AB6;
                        padding:14px 24px;
                        border-radius:10px;
                        font-weight:800;
                    ">
                        Cek Status Pendaftaran →
                    </a>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection
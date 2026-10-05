@extends('layouts.app')

@section('title', 'Kontak Sekolah')

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
            HUBUNGI KAMI
        </p>

        <h1 style="
            font-size:clamp(42px,6vw,68px);
            line-height:1;
            letter-spacing:-3px;
            margin-bottom:18px;
        ">
            Mari terhubung.
        </h1>

        <p style="
            color:#d8d5df;
            font-size:17px;
            max-width:600px;
        ">
            Punya pertanyaan seputar sekolah atau pendaftaran?
            Kami siap membantu kamu.
        </p>

    </div>
</section>

{{-- INFORMASI KONTAK --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <div class="grid">

            {{-- ALAMAT --}}
            <div class="card" style="background:#F9C74F;border:none;">

                <div style="
                    width:54px;
                    height:54px;
                    border-radius:16px;
                    background:rgba(255,255,255,.65);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:25px;
                    margin-bottom:25px;
                ">
                    📍
                </div>

                <h3 style="font-size:23px;margin-bottom:12px;">
                    Alamat Sekolah
                </h3>

                <p style="color:#4f4a58;">
                    Jl. Contoh No. 123, Surakarta
                </p>

            </div>

            {{-- TELEPON --}}
            <div class="card" style="background:#F7A8B8;border:none;">

                <div style="
                    width:54px;
                    height:54px;
                    border-radius:16px;
                    background:rgba(255,255,255,.65);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:25px;
                    margin-bottom:25px;
                ">
                    📞
                </div>

                <h3 style="font-size:23px;margin-bottom:12px;">
                    Telepon
                </h3>

                <p style="color:#4f4a58;">
                    088210522337
                </p>

            </div>

            {{-- EMAIL --}}
            <div class="card" style="background:#A9D6E5;border:none;">

                <div style="
                    width:54px;
                    height:54px;
                    border-radius:16px;
                    background:rgba(255,255,255,.65);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:25px;
                    margin-bottom:25px;
                ">
                    ✉️
                </div>

                <h3 style="font-size:23px;margin-bottom:12px;">
                    Email
                </h3>

                <p style="color:#4f4a58;">
                    info@sekolah.sch.id
                </p>

            </div>

        </div>

        {{-- WHATSAPP --}}
        <div style="
            margin-top:30px;
            background:#6C4AB6;
            color:white;
            border-radius:28px;
            padding:40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:25px;
            flex-wrap:wrap;
        ">

            <div style="max-width:550px;">

                <p style="
                    color:#F9C74F;
                    font-size:12px;
                    font-weight:800;
                    letter-spacing:2px;
                    margin-bottom:10px;
                ">
                    BUTUH BANTUAN?
                </p>

                <h2 style="
                    font-size:clamp(28px,4vw,38px);
                    line-height:1.1;
                    margin-bottom:12px;
                ">
                    Ngobrol langsung dengan kami.
                </h2>

                <p style="color:#eee8ff;font-size:14px;">
                    Hubungi kami melalui WhatsApp untuk pertanyaan
                    seputar sekolah dan pendaftaran.
                </p>

                <p style="
                    color:#F9C74F;
                    font-weight:800;
                    margin-top:15px;
                ">
                    088210522337
                </p>

            </div>

            <a href="https://wa.me/6288210522337" target="_blank" rel="noopener noreferrer" class="btn" style="
                   background:#F9C74F;
                   color:#252333 !important;
                   padding:15px 23px;
                   white-space:nowrap;
               ">
                Hubungi via WhatsApp →
            </a>

        </div>

    </div>
</section>

@endsection
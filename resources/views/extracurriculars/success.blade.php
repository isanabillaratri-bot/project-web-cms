@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil')

@section('content')

<section class="section" style="background:#FFFDF5; min-height:70vh;">
    <div class="container">

        <div style="
            max-width:750px;
            margin:40px auto;
            background:white;
            border-radius:28px;
            padding:45px;
            border:1px solid #eee8d9;
            box-shadow:0 15px 40px rgba(37,35,51,.07);
        ">

            {{-- ICON --}}
            <div style="
                width:70px;
                height:70px;
                border-radius:22px;
                background:#E8F5EF;
                color:#276749;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:32px;
                margin-bottom:25px;
            ">
                ✓
            </div>

            <p style="
                color:#6C4AB6;
                font-size:12px;
                font-weight:800;
                letter-spacing:1px;
                margin-bottom:8px;
            ">
                PENDAFTARAN EKSTRAKURIKULER
            </p>

            <h1 style="
                font-size:clamp(34px,5vw,52px);
                line-height:1.05;
                letter-spacing:-2px;
                margin-bottom:15px;
            ">
                Pendaftaran berhasil!
            </h1>

            <p style="
                color:#6F6B7A;
                font-size:16px;
                margin-bottom:30px;
            ">
                Pendaftaran kamu untuk ekstrakurikuler
                <strong>{{ $extracurricular->name }}</strong>
                sudah kami terima.
            </p>

            {{-- STATUS --}}
            <div style="
                background:#FFF8DF;
                border-radius:18px;
                padding:20px;
                margin-bottom:30px;
            ">

                <p style="
                    font-size:11px;
                    font-weight:800;
                    letter-spacing:1px;
                    color:#8A6A00;
                    margin-bottom:6px;
                ">
                    STATUS PENDAFTARAN
                </p>

                <p style="
                    font-size:20px;
                    font-weight:800;
                    color:#C78A00;
                ">
                    🟡 Menunggu Verifikasi
                </p>

                <p style="
                    color:#6F6B7A;
                    font-size:14px;
                    margin-top:8px;
                ">
                    Pengurus akan memeriksa data pendaftaran kamu.
                </p>

            </div>

            {{-- LANGKAH SELANJUTNYA --}}
            <h2 style="
                font-size:24px;
                margin-bottom:20px;
            ">
                Selanjutnya apa?
            </h2>

            <div style="
                display:flex;
                flex-direction:column;
                gap:18px;
                margin-bottom:35px;
            ">

                <div>
                    <strong>01 — Tunggu verifikasi</strong>
                    <p style="
                        color:#6F6B7A;
                        font-size:14px;
                        margin-top:4px;
                    ">
                        Pengurus akan memeriksa data yang kamu kirim.
                    </p>
                </div>

                <div>
                    <strong>02 — Bergabung ke grup</strong>
                    <p style="
                        color:#6F6B7A;
                        font-size:14px;
                        margin-top:4px;
                    ">
                        Gunakan tombol di bawah untuk bergabung
                        ke grup WhatsApp {{ $extracurricular->name }}.
                    </p>
                </div>

                <div>
                    <strong>03 — Tunggu informasi berikutnya</strong>
                    <p style="
                        color:#6F6B7A;
                        font-size:14px;
                        margin-top:4px;
                    ">
                        Informasi mengenai jadwal dan kegiatan
                        akan disampaikan melalui grup.
                    </p>
                </div>

            </div>

            {{-- WHATSAPP GROUP --}}
            @if($registration && $registration->status === 'approved')
            <div style="background:#6C4AB6;color:white;border-radius:20px;padding:25px;margin-bottom:30px;">
                <p style="color:#F9C74F;font-size:11px;font-weight:800;letter-spacing:1px;margin-bottom:8px;">
                    PENDAFTARAN DISETUJUI
                </p>

                <h3 style="font-size:22px;margin-bottom:8px;">
                    Selamat! Kamu diterima 🎉
                </h3>

                <p style="color:#eee8ff;font-size:14px;margin-bottom:18px;">
                    Kamu sekarang dapat bergabung ke grup WhatsApp {{ $extracurricular->name }}.
                </p>

                <a href="{{ $extracurricular->whatsapp_group_link }}" target="_blank" rel="noopener noreferrer" class="btn" style="background:#F9C74F;color:#252333 !important;">
                    Gabung Grup WhatsApp →
                </a>
            </div>
            @endif

            <a href="/" class="btn" style="
                background:#252333;
            ">
                Kembali ke Beranda
            </a>

        </div>

    </div>
</section>

@endsection
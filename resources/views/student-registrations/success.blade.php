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
                PENERIMAAN SISWA
            </p>

            <h1 style="
                font-size:clamp(34px,5vw,52px);
                line-height:1.05;
                letter-spacing:-2px;
                margin-bottom:15px;
                ">
                Pendaftaran berhasil, {{ $registration->name }}!
            </h1>

            <p style="
                color:#6F6B7A;
                font-size:16px;
                margin-bottom:30px;
            ">
                Data dan dokumen kamu sudah kami terima.
            </p>

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
                    @if($registration->status === 'verified')

                <p style="
                    font-size:20px;
                    font-weight:800;
                    color:#276749;
                ">
                    ✓ Data Terverifikasi
                </p>

                <p style="
                    color:#6F6B7A;
                    font-size:14px;
                    margin-top:8px;
                ">
                    Data dan dokumen kamu sudah berhasil diverifikasi.
                </p>

                @elseif($registration->status === 'accepted')

                <p style="
                    font-size:20px;
                    font-weight:800;
                    color:#6C4AB6;
                ">
                    🎉 Diterima
                </p>

                <p style="
                    color:#6F6B7A;
                    font-size:14px;
                    margin-top:8px;
                ">
                    Selamat! Kamu dinyatakan diterima.
                    Silakan mengikuti instruksi selanjutnya.
                </p>

                @elseif($registration->status === 'rejected')

                <p style="
                    font-size:20px;
                    font-weight:800;
                    color:#B42318;
                ">
                    ✕ Tidak Lolos
                </p>

                <p style="
                    color:#6F6B7A;
                    font-size:14px;
                    margin-top:8px;
                ">
                    Pendaftaran kamu belum dapat dilanjutkan pada tahap ini.
                </p>

                @else

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
                    Panitia sedang memeriksa data dan dokumen yang kamu kirim.
                </p>

                @endif
            </div>

            <h2 style="
                font-size:24px;
                margin-bottom:20px;
            ">
                Apa yang harus dilakukan selanjutnya?
            </h2>

            <div style="
                display:flex;
                flex-direction:column;
                gap:18px;
                margin-bottom:35px;
            ">

                <div>
                    <strong>01 — Tunggu verifikasi</strong>
                    <p style="color:#6F6B7A;font-size:14px;margin-top:4px;">
                        Panitia akan memeriksa data dan dokumen yang kamu kirim.
                    </p>
                </div>

                <div>
                    <strong>02 — Cek informasi selanjutnya</strong>
                    <p style="color:#6F6B7A;font-size:14px;margin-top:4px;">
                        Informasi berikutnya akan disampaikan melalui nomor HP yang kamu daftarkan.
                    </p>
                </div>

                @if($registration->status === 'pending')

                <h2 style="font-size:24px;margin-bottom:20px;">
                    Apa yang harus dilakukan selanjutnya?
                </h2>

                <div style="display:flex;flex-direction:column;gap:18px;margin-bottom:35px;">

                    <div>
                        <strong>01 — Tunggu verifikasi</strong>
                        <p style="color:#6F6B7A;font-size:14px;margin-top:4px;">
                            Panitia akan memeriksa data dan dokumen yang kamu kirim.
                        </p>
                    </div>

                    <div>
                        <strong>02 — Cek informasi selanjutnya</strong>
                        <p style="color:#6F6B7A;font-size:14px;margin-top:4px;">
                            Informasi berikutnya akan disampaikan melalui nomor HP yang kamu daftarkan.
                        </p>
                    </div>

                    <div>
                        <strong>03 — Tunggu hasil verifikasi</strong>
                        <p style="color:#6F6B7A;font-size:14px;margin-top:4px;">
                            Setelah pemeriksaan selesai, status pendaftaran kamu akan diperbarui.
                        </p>
                    </div>

                </div>

                @elseif($registration->status === 'verified')

                <h2 style="font-size:24px;margin-bottom:20px;">
                    Data kamu sudah terverifikasi.
                </h2>

                <p style="color:#6F6B7A;font-size:14px;margin-bottom:35px;">
                    Data dan dokumen kamu telah diperiksa oleh panitia.
                    Silakan menunggu informasi mengenai tahap pendaftaran berikutnya.
                </p>

                @elseif($registration->status === 'accepted')

                <h2 style="font-size:24px;margin-bottom:20px;">
                    Selamat! 🎉
                </h2>

                <p style="color:#6F6B7A;font-size:14px;margin-bottom:35px;">
                    Kamu dinyatakan diterima. Silakan mengikuti informasi
                    daftar ulang atau tahap berikutnya dari pihak sekolah.
                </p>

                @elseif($registration->status === 'rejected')

                <h2 style="font-size:24px;margin-bottom:20px;">
                    Pendaftaran selesai.
                </h2>

                <p style="color:#6F6B7A;font-size:14px;margin-bottom:35px;">
                    Mohon maaf, pendaftaran kamu belum dapat dilanjutkan
                    pada tahap ini.
                </p>

                @endif

            </div>

            <a href="/" class="btn">
                Kembali ke Beranda
            </a>

        </div>

    </div>
</section>

@endsection
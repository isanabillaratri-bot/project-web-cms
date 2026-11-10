@extends('layouts.app')

@section('title', 'Status Pendaftaran')

@section('content')
<section class="section" style="background:#FFFDF5; min-height:70vh;">
    <div class="container">

        <div style="max-width:750px; margin:40px auto; background:white; border-radius:28px; padding:45px; border:1px solid #eee8d9; box-shadow:0 15px 40px rgba(37,35,51,.07);">

            <div style="width:70px; height:70px; border-radius:22px; background:#E8F5EF; color:#276749; display:flex; align-items:center; justify-content:center; font-size:32px; margin-bottom:25px;">
                ✓
            </div>

            <p style="color:#6C4AB6; font-size:12px; font-weight:800; letter-spacing:1px;">
                PENERIMAAN SISWA BARU
            </p>

            <h1 style="font-size:clamp(30px,5vw,46px); line-height:1.1; margin-bottom:15px;">
                Pendaftaran berhasil, {{ $registration->name }}!
            </h1>

            <p style="color:#6F6B7A; font-size:16px; margin-bottom:25px;">
                Data dan dokumen pendaftaran kamu sudah kami terima.
            </p>

            <div style="background:#F5F0FF; border-radius:15px; padding:18px; margin-bottom:25px;">
                <p style="font-size:12px; font-weight:800; color:#6C4AB6; margin-bottom:6px;">
                    JALUR PENDAFTARAN
                </p>
                <p style="font-size:18px; font-weight:800;">
                    {{ $registration->admission_path === 'prestasi' ? 'Jalur Prestasi' : 'Jalur Tes' }}
                </p>
            </div>

            <div style="background:#FFF8DF; border-radius:18px; padding:20px; margin-bottom:30px;">

                <p style="font-size:11px; font-weight:800; letter-spacing:1px; color:#8A6A00; margin-bottom:8px;">
                    STATUS PENDAFTARAN
                </p>

                @if($registration->status === 'accepted')

                <p style="font-size:20px; font-weight:800; color:#276749;">
                    ✓ Lolos Verifikasi
                </p>

                @if($registration->admission_path === 'prestasi')
                <p style="color:#6F6B7A; font-size:14px; margin-top:8px;">
                    Selamat! Dokumen dan sertifikat prestasi kamu telah dinyatakan memenuhi persyaratan.
                </p>
                @else
                <p style="color:#6F6B7A; font-size:14px; margin-top:8px;">
                    Selamat! Dokumen persyaratan kamu telah dinyatakan memenuhi persyaratan administrasi.
                </p>
                @endif

                @elseif($registration->status === 'rejected')

                <p style="font-size:20px; font-weight:800; color:#B42318;">
                    ✕ Tidak Lolos
                </p>

                <p style="color:#6F6B7A; font-size:14px; margin-top:8px;">
                    Dokumen pendaftaran kamu belum memenuhi persyaratan pada jalur ini.
                </p>

                @else

                <p style="font-size:20px; font-weight:800; color:#C78A00;">
                    🟡 Menunggu Verifikasi
                </p>

                <p style="color:#6F6B7A; font-size:14px; margin-top:8px;">
                    Panitia sedang memeriksa data dan dokumen yang kamu kirim. Silakan menunggu hasil verifikasi.
                </p>

                @endif

            </div>

            <h2 style="font-size:23px; margin-bottom:15px;">
                Informasi Selanjutnya
            </h2>

            @if($registration->status === 'pending')

            <p style="color:#6F6B7A; font-size:14px; margin-bottom:25px;">
                Pantau status pendaftaran secara berkala melalui halaman Cek Status Pendaftaran menggunakan NIK yang kamu daftarkan.
            </p>

            @elseif($registration->status === 'accepted')

            @if($registration->admission_path === 'prestasi')

            <p style="color:#6F6B7A; font-size:14px; margin-bottom:25px;">
                Silakan mengikuti informasi dan petunjuk daftar ulang dari pihak sekolah untuk menyelesaikan proses penerimaan.
            </p>

            @else

            <p style="color:#6F6B7A; font-size:14px; margin-bottom:25px;">
                Silakan memeriksa informasi jadwal dan ketentuan pelaksanaan tes dari pihak sekolah.
            </p>

            @endif

            @elseif($registration->status === 'rejected')

            @if($registration->admission_path === 'prestasi')

            <p style="color:#6F6B7A; font-size:14px; margin-bottom:20px;">
                Kamu masih dapat mencoba mendaftar melalui Jalur Tes dengan mengisi formulir pendaftaran yang baru.
            </p>

            <a href="/pendaftaran-siswa/tes" class="btn" style="margin-bottom:25px;">
                Daftar melalui Jalur Tes
            </a>

            @else

            <p style="color:#6F6B7A; font-size:14px; margin-bottom:25px;">
                Pendaftaran melalui Jalur Tes dinyatakan tidak berhasil. Terima kasih telah mengikuti proses penerimaan siswa baru.
            </p>

            @endif

            @endif

            <a href="/" class="btn">
                Kembali ke Beranda
            </a>

        </div>
    </div>
</section>
@endsection
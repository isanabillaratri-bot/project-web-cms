@extends('layouts.app')

@section('title', 'Pilih Jalur Pendaftaran')

@section('content')
<section class="section" style="background:#FFFDF5; min-height:70vh;">
    <div class="container">

        <div style="max-width:850px; margin:40px auto; text-align:center;">

            <p style="color:#6C4AB6; font-size:12px; font-weight:800; letter-spacing:1px;">
                PENERIMAAN SISWA BARU
            </p>

            <h1 style="font-size:clamp(32px,5vw,46px); margin-bottom:15px;">
                Pilih Jalur Pendaftaran
            </h1>

            <p style="color:#6F6B7A; margin-bottom:40px;">
                Silakan pilih jalur pendaftaran yang sesuai dengan persyaratan dan kemampuan kamu.
            </p>

            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:22px; text-align:left;">

                <div style="background:white; border:1px solid #eee8d9; border-radius:24px; padding:30px; box-shadow:0 10px 30px rgba(37,35,51,.05);">

                    <div style="font-size:32px; margin-bottom:18px;">
                        🏆
                    </div>

                    <h2 style="font-size:24px; margin-bottom:12px;">
                        Jalur Prestasi
                    </h2>

                    <p style="color:#6F6B7A; font-size:14px; margin-bottom:22px;">
                        Untuk calon siswa yang memiliki sertifikat atau bukti prestasi di bidang akademik maupun nonakademik.
                    </p>

                    <a href="/pendaftaran-siswa/prestasi" class="btn">
                        Pilih Jalur Prestasi
                    </a>

                </div>

                <div style="background:white; border:1px solid #eee8d9; border-radius:24px; padding:30px; box-shadow:0 10px 30px rgba(37,35,51,.05);">

                    <div style="font-size:32px; margin-bottom:18px;">
                        📝
                    </div>

                    <h2 style="font-size:24px; margin-bottom:12px;">
                        Jalur Tes
                    </h2>

                    <p style="color:#6F6B7A; font-size:14px; margin-bottom:22px;">
                        Untuk calon siswa yang ingin mengikuti seleksi melalui tes sesuai jadwal dan ketentuan sekolah.
                    </p>

                    <a href="/pendaftaran-siswa/tes" class="btn">
                        Pilih Jalur Tes
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection
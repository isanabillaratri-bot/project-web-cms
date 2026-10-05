@extends('layouts.app')

@section('title', 'Cek Status Pendaftaran')

@section('content')

<section style="
    background:#252333;
    color:white;
    padding:70px 0 65px;
">
    <div class="container" style="max-width:800px;">

        <p style="
            color:#F9C74F;
            font-weight:800;
            letter-spacing:2px;
            font-size:12px;
            margin-bottom:14px;
        ">
            PENERIMAAN SISWA
        </p>

        <h1 style="
            font-size:clamp(42px,6vw,62px);
            line-height:1;
            letter-spacing:-3px;
            margin-bottom:18px;
        ">
            Cek Status Pendaftaran.
        </h1>

        <p style="
            color:#d8d5df;
            font-size:16px;
        ">
            Masukkan NIK yang kamu gunakan saat mendaftar.
        </p>

    </div>
</section>

<section class="section" style="background:#FFFDF5;">

    <div class="container">

        <div style="
            max-width:600px;
            margin:0 auto;
            background:white;
            border-radius:28px;
            padding:40px;
            border:1px solid #eee8d9;
            box-shadow:0 15px 40px rgba(37,35,51,.07);
        ">

            @if($errors->any())

            <div style="
                    background:#FFF1F1;
                    color:#B42318;
                    padding:15px 18px;
                    border-radius:14px;
                    margin-bottom:25px;
                    font-size:14px;
                ">
                {{ $errors->first() }}
            </div>

            @endif

            <form method="GET" action="/cek-status-pendaftaran">

                <label style="
                    font-size:13px;
                    font-weight:800;
                ">
                    NIK
                </label>

                <input type="text" name="nik" value="{{ request('nik') }}" placeholder="Masukkan NIK" required style="
                        width:100%;
                        padding:14px 15px;
                        margin-top:8px;
                        margin-bottom:20px;
                        border:1px solid #ddd8e6;
                        border-radius:10px;
                        font-size:14px;
                    ">

                <button type="submit" class="btn" style="padding:14px 22px;">
                    Cek Status →
                </button>

            </form>

            @if(request('nik'))

            @if($registration)

            <div style="
            margin-top:30px;
            padding:25px;
            background:#F8F5FF;
            border-radius:20px;
        ">

                <p style="
                color:#6C4AB6;
                font-size:12px;
                font-weight:800;
                letter-spacing:1px;
                margin-bottom:8px;
            ">
                    DATA PENDAFTARAN
                </p>

                <h2 style="
                font-size:24px;
                margin-bottom:8px;
            ">
                    {{ $registration->name }}
                </h2>

                <p style="
                color:#6F6B7A;
                font-size:14px;
                margin-bottom:20px;
            ">
                    NIK: {{ $registration->nik }}
                </p>

                <div style="
                background:white;
                border-radius:14px;
                padding:16px;
            ">
                    <p style="
                    font-size:11px;
                    font-weight:800;
                    color:#6F6B7A;
                    margin-bottom:5px;
                ">
                        STATUS
                    </p>

                    @if($registration->status === 'pending')

                    <strong style="color:#C78A00;">
                        🟡 Menunggu Verifikasi
                    </strong>

                    @elseif($registration->status === 'verified')

                    <strong style="color:#276749;">
                        ✓ Data Terverifikasi
                    </strong>

                    @elseif($registration->status === 'accepted')

                    <strong style="color:#6C4AB6;">
                        🎉 Diterima
                    </strong>

                    @elseif($registration->status === 'rejected')

                    <strong style="color:#B42318;">
                        ✕ Tidak Lolos
                    </strong>

                    @endif

                </div>

                <div style="margin-top:20px;">
                    <a href="/pendaftaran-siswa/success/{{ $registration->id }}" class="btn">
                        Lihat Detail Status →
                    </a>
                </div>

            </div>

            @else

            <div style="
            margin-top:30px;
            background:#FFF1F1;
            color:#B42318;
            padding:18px;
            border-radius:14px;
            font-size:14px;
        ">
                Data pendaftaran dengan NIK tersebut tidak ditemukan.
            </div>

            @endif

            @endif

        </div>

    </div>

</section>

@endsection
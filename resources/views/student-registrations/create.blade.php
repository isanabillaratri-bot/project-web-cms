@extends('layouts.app')

@section('title', 'Pendaftaran Siswa')

@section('content')

{{-- HEADER --}}
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
            PENERIMAAN SISWA
        </p>

        <h1 style="
            font-size:clamp(34px,5vw,56px);
            line-height:1.08;
            letter-spacing:-2px;
            margin-bottom:15px;
        ">
            Pendaftaran Siswa.
        </h1>

        <p style="
            color:#bdb9c8;
            font-size:14px;
            max-width:600px;
        ">
            Lengkapi data diri dan dokumen persyaratan
            untuk melakukan pendaftaran.
        </p>

    </div>
</section>


{{-- FORM --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <div style="
            max-width:800px;
            margin:0 auto;
            background:white;
            border-radius:28px;
            padding:40px;
            border:1px solid #eee8d9;
            box-shadow:0 15px 40px rgba(37,35,51,.07);
        ">

            {{-- STATUS PENDAFTARAN --}}
            @if(session('success'))

            <div style="
    background:#E8F5EF;
    color:#252333;
    padding:25px;
    border-radius:20px;
    margin-bottom:30px;
">

                <div style="
        font-size:30px;
        margin-bottom:10px;
    ">
                    ✓
                </div>

                <h3 style="
        font-size:22px;
        margin-bottom:8px;
    ">
                    Pendaftaran berhasil dikirim!
                </h3>

                <p style="
        color:#4f4a58;
        font-size:14px;
        margin-bottom:22px;
    ">
                    Data dan dokumen kamu sudah kami terima.
                </p>

                <div style="
        background:white;
        border-radius:14px;
        padding:16px 18px;
        margin-bottom:20px;
    ">
                    <p style="
            font-size:11px;
            font-weight:800;
            letter-spacing:1px;
            color:#6F6B7A;
            margin-bottom:5px;
        ">
                        STATUS PENDAFTARAN
                    </p>

                    <p style="
            color:#C78A00;
            font-weight:800;
            font-size:16px;
        ">
                        🟡 Menunggu Verifikasi
                    </p>
                </div>

                <h4 style="
        font-size:17px;
        margin-bottom:15px;
    ">
                    Apa yang harus dilakukan selanjutnya?
                </h4>

                <div style="
        display:flex;
        flex-direction:column;
        gap:12px;
    ">

                    <div>
                        <strong>01 — Tunggu verifikasi</strong>
                        <p style="color:#6F6B7A;font-size:13px;margin-top:3px;">
                            Panitia akan memeriksa data dan dokumen yang kamu kirim.
                        </p>
                    </div>

                    <div>
                        <strong>02 — Cek informasi selanjutnya</strong>
                        <p style="color:#6F6B7A;font-size:13px;margin-top:3px;">
                            Informasi berikutnya akan disampaikan melalui nomor HP yang kamu daftarkan.
                        </p>
                    </div>

                    <div>
                        <strong>03 — Ikuti tahap berikutnya</strong>
                        <p style="color:#6F6B7A;font-size:13px;margin-top:3px;">
                            Jika data terverifikasi, kamu akan mendapatkan informasi mengenai proses selanjutnya.
                        </p>
                    </div>

                </div>

            </div>

            @endif


            {{-- ERROR --}}
            @if($errors->any())
            <div style="
                background:#FFF1F1;
                color:#B42318;
                padding:16px 18px;
                border-radius:14px;
                margin-bottom:25px;
                font-size:14px;
            ">
                <strong>Periksa kembali data berikut:</strong>

                <ul style="
                    margin-top:8px;
                    padding-left:20px;
                ">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <form method="POST" action="/pendaftaran-siswa" enctype="multipart/form-data">

                @csrf


                {{-- DATA CALON SISWA --}}
                <div style="margin-bottom:30px;">

                    <p style="
                        color:#6C4AB6;
                        font-size:12px;
                        font-weight:800;
                        letter-spacing:1px;
                        margin-bottom:7px;
                    ">
                        BAGIAN 01
                    </p>

                    <h2 style="
                        font-size:28px;
                        line-height:1.1;
                    ">
                        Data Calon Siswa
                    </h2>

                </div>


                {{-- NAMA --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Nama Lengkap
                    </label>

                    <input type="text" name="name" value="{{ old('name') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                        ">

                </div>


                {{-- NIK --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        NIK
                    </label>

                    <input type="text" name="nik" value="{{ old('nik') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                        ">

                </div>


                {{-- TEMPAT & TANGGAL LAHIR --}}
                <div style="
                    display:grid;
                    grid-template-columns:1fr 1fr;
                    gap:20px;
                    margin-bottom:20px;
                ">

                    <div>

                        <label style="
                            font-size:13px;
                            font-weight:800;
                        ">
                            Tempat Lahir
                        </label>

                        <input type="text" name="birth_place" value="{{ old('birth_place') }}" required style="
                                width:100%;
                                padding:13px 15px;
                                margin-top:7px;
                                border:1px solid #ddd8e6;
                                border-radius:10px;
                                font-size:14px;
                            ">

                    </div>


                    <div>

                        <label style="
                            font-size:13px;
                            font-weight:800;
                        ">
                            Tanggal Lahir
                        </label>

                        <input type="date" name="birth_date" value="{{ old('birth_date') }}" required style="
                                width:100%;
                                padding:13px 15px;
                                margin-top:7px;
                                border:1px solid #ddd8e6;
                                border-radius:10px;
                                font-size:14px;
                            ">

                    </div>

                </div>


                {{-- ALAMAT --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Alamat
                    </label>

                    <textarea name="address" rows="4" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                            resize:vertical;
                        ">{{ old('address') }}</textarea>

                </div>


                {{-- ASAL SEKOLAH --}}
                <div style="margin-bottom:35px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Asal Sekolah
                    </label>

                    <input type="text" name="school_origin" value="{{ old('school_origin') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                        ">

                </div>


                {{-- DATA ORANG TUA --}}
                <div style="
                    border-top:1px solid #eee8d9;
                    padding-top:30px;
                    margin-bottom:30px;
                ">

                    <p style="
                        color:#6C4AB6;
                        font-size:12px;
                        font-weight:800;
                        letter-spacing:1px;
                        margin-bottom:7px;
                    ">
                        BAGIAN 02
                    </p>

                    <h2 style="
                        font-size:28px;
                        line-height:1.1;
                    ">
                        Data Orang Tua / Wali
                    </h2>

                </div>


                {{-- NAMA ORANG TUA --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Nama Orang Tua / Wali
                    </label>

                    <input type="text" name="parent_name" value="{{ old('parent_name') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                        ">

                </div>


                {{-- HP ORANG TUA --}}
                <div style="
                    margin-bottom:35px;
                ">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Nomor HP Orang Tua / Wali
                    </label>

                    <input type="text" name="parent_phone" value="{{ old('parent_phone') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                        ">

                </div>


                {{-- DOKUMEN --}}
                <div style="
                    border-top:1px solid #eee8d9;
                    padding-top:30px;
                    margin-bottom:30px;
                ">

                    <p style="
                        color:#6C4AB6;
                        font-size:12px;
                        font-weight:800;
                        letter-spacing:1px;
                        margin-bottom:7px;
                    ">
                        BAGIAN 03
                    </p>

                    <h2 style="
                        font-size:28px;
                        line-height:1.1;
                    ">
                        Dokumen Persyaratan
                    </h2>

                    <p style="
                        color:#6F6B7A;
                        font-size:14px;
                        margin-top:8px;
                    ">
                        Upload satu dokumen persyaratan untuk melengkapi pendaftaran.
                    </p>

                </div>


                <div style="margin-bottom:30px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Upload Dokumen
                    </label>

                    <input type="file" name="document" required accept=".pdf,.jpg,.jpeg,.png" style="
                            width:100%;
                            padding:13px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:13px;
                        ">

                    <small style="
                        display:block;
                        color:#8A8694;
                        margin-top:8px;
                        font-size:12px;
                    ">
                        PDF, JPG, JPEG, atau PNG. Maksimal 2 MB.
                    </small>

                </div>


                {{-- SUBMIT --}}
                <button type="submit" class="btn" style="
                        padding:14px 24px;
                    ">
                    Kirim Pendaftaran →
                </button>

            </form>

        </div>

    </div>
</section>

@endsection
@extends('layouts.app')

@section('title', 'Pendaftaran Jalur Tes')

@section('content')
<section class="section" style="background:#FFFDF5; min-height:70vh;">
    <div class="container">

        <div style="max-width:800px; margin:40px auto; background:white; padding:35px; border-radius:24px; border:1px solid #eee8d9;">

            <p style="color:#6C4AB6; font-size:12px; font-weight:800; letter-spacing:1px;">
                PENERIMAAN SISWA BARU
            </p>

            <h1 style="font-size:36px; margin-bottom:10px;">
                Formulir Jalur Tes
            </h1>

            <p style="color:#6F6B7A; margin-bottom:30px;">
                Lengkapi data diri dan unggah dokumen persyaratan untuk mengikuti seleksi Jalur Tes.
            </p>

            @if($errors->any())
            <div style="background:#FDECEC; color:#B42318; padding:15px; border-radius:12px; margin-bottom:20px;">
                <strong>Periksa kembali formulir kamu.</strong>
                <ul style="margin:8px 0 0 20px;">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="/pendaftaran-siswa/tes" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 style="font-size:22px; margin-bottom:20px;">Data Calon Siswa</h2>

                <div style="margin-bottom:18px;">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name') }}" required style="width:100%; padding:12px; margin-top:7px;">
                </div>

                <div style="margin-bottom:18px;">
                    <label>NIK</label>
                    <input type="text" name="nik" value="{{ old('nik') }}" required style="width:100%; padding:12px; margin-top:7px;">
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:15px;">
                    <div style="margin-bottom:18px;">
                        <label>Tempat Lahir</label>
                        <input type="text" name="birth_place" value="{{ old('birth_place') }}" required style="width:100%; padding:12px; margin-top:7px;">
                    </div>

                    <div style="margin-bottom:18px;">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="birth_date" value="{{ old('birth_date') }}" required style="width:100%; padding:12px; margin-top:7px;">
                    </div>
                </div>

                <div style="margin-bottom:18px;">
                    <label>Alamat Lengkap</label>
                    <textarea name="address" rows="3" required style="width:100%; padding:12px; margin-top:7px;">{{ old('address') }}</textarea>
                </div>

                <div style="margin-bottom:25px;">
                    <label>Asal Sekolah</label>
                    <input type="text" name="school_origin" value="{{ old('school_origin') }}" required style="width:100%; padding:12px; margin-top:7px;">
                </div>

                <hr style="margin:25px 0;">

                <h2 style="font-size:22px; margin-bottom:20px;">Data Orang Tua / Wali</h2>

                <div style="margin-bottom:18px;">
                    <label>Nama Orang Tua / Wali</label>
                    <input type="text" name="parent_name" value="{{ old('parent_name') }}" required style="width:100%; padding:12px; margin-top:7px;">
                </div>

                <div style="margin-bottom:25px;">
                    <label>Nomor HP Orang Tua / Wali</label>
                    <input type="tel" name="parent_phone" value="{{ old('parent_phone') }}" required style="width:100%; padding:12px; margin-top:7px;">
                </div>

                <hr style="margin:25px 0;">

                <h2 style="font-size:22px; margin-bottom:10px;">Unggah Dokumen</h2>

                <p style="color:#6F6B7A; font-size:14px; margin-bottom:20px;">
                    Dokumen wajib berbentuk PDF dengan ukuran maksimal 2 MB.
                </p>

                <div style="margin-bottom:30px;">
                    <label><strong>Dokumen Persyaratan</strong></label>
                    <p style="font-size:13px; color:#6F6B7A; margin:5px 0 10px;">
                        Unggah satu file PDF dokumen persyaratan yang telah dilengkapi.
                    </p>
                    <input type="file" name="document" accept=".pdf,application/pdf" required>
                </div>

                <button type="submit" class="btn">
                    Kirim Pendaftaran
                </button>

                <a href="/pendaftaran-siswa" class="btn" style="margin-left:8px;">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</section>
@endsection
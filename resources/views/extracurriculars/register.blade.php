@extends('layouts.app')

@section('title', 'Pendaftaran ' . $extracurricular->name)

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
            PENDAFTARAN EKSTRAKURIKULER
        </p>

        <h1 style="
            font-size:clamp(34px,5vw,56px);
            line-height:1.08;
            letter-spacing:-2px;
            margin-bottom:15px;
        ">
            {{ $extracurricular->name }}
        </h1>

        <p style="
            color:#bdb9c8;
            font-size:14px;
        ">
            Lengkapi data berikut untuk mendaftar.
        </p>

    </div>
</section>


{{-- FORM --}}
<section class="section" style="background:#FFFDF5;">
    <div class="container">

        <div style="
            max-width:700px;
            margin:0 auto;
            background:white;
            border-radius:28px;
            padding:40px;
            border:1px solid #eee8d9;
            box-shadow:0 15px 40px rgba(37,35,51,.07);
        ">

            {{-- SUCCESS --}}
            @if(session('success'))
            <div style="
                background:#E8F5EF;
                color:#276749;
                padding:16px 18px;
                border-radius:14px;
                margin-bottom:25px;
                font-size:14px;
                font-weight:600;
            ">
                ✓ {{ session('success') }}
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
                <strong>Periksa kembali data:</strong>

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


            <div style="margin-bottom:30px;">
                <p style="
                    color:#6C4AB6;
                    font-size:12px;
                    font-weight:800;
                    letter-spacing:1px;
                    margin-bottom:7px;
                ">
                    DATA PENDAFTAR
                </p>

                <h2 style="
                    font-size:28px;
                    line-height:1.1;
                ">
                    Isi datamu
                </h2>

                <p style="
                    color:#6F6B7A;
                    font-size:14px;
                    margin-top:8px;
                ">
                    Pastikan data yang kamu masukkan sudah benar.
                </p>
            </div>


            <form method="POST" action="/extracurriculars/{{ $extracurricular->id }}/register">

                @csrf


                {{-- NAMA --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Nama Siswa
                    </label>

                    <input type="text" name="student_name" value="{{ old('student_name') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                            outline:none;
                        ">

                </div>


                {{-- KELAS --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Kelas
                    </label>

                    <input type="text" name="class" value="{{ old('class') }}" placeholder="Contoh: IX RPL" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                            outline:none;
                        ">

                </div>


                {{-- NOMOR INDUK --}}
                <div style="margin-bottom:20px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Nomor Induk Siswa
                    </label>

                    <input type="text" name="student_number" value="{{ old('student_number') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                            outline:none;
                        ">

                </div>


                {{-- HP --}}
                <div style="margin-bottom:28px;">

                    <label style="
                        font-size:13px;
                        font-weight:800;
                    ">
                        Nomor HP
                    </label>

                    <input type="text" name="phone" value="{{ old('phone') }}" required style="
                            width:100%;
                            padding:13px 15px;
                            margin-top:7px;
                            border:1px solid #ddd8e6;
                            border-radius:10px;
                            font-size:14px;
                            outline:none;
                        ">

                </div>


                {{-- BUTTON --}}
                <div style="
                    display:flex;
                    gap:12px;
                    flex-wrap:wrap;
                    align-items:center;
                ">

                    <button type="submit" class="btn">
                        Kirim Pendaftaran →
                    </button>

                    <a href="/extracurriculars/{{ $extracurricular->id }}" style="
                            color:#6C4AB6;
                            font-size:14px;
                            font-weight:800;
                        ">
                        Batal
                    </a>

                </div>

            </form>

        </div>

        <div style="text-align:center;margin-top:25px;">
            <p style="color:#6F6B7A;font-size:14px;margin-bottom:8px;">
                Sudah pernah mendaftar?
            </p>

            <a href="/cek-status-ekskul" style="color:#6C4AB6;font-weight:800;">
                Cek Status Pendaftaran →
            </a>
        </div>

    </div>
</section>

@endsection
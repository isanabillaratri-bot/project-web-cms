@extends('layouts.app')

@section('title', 'Cek Status Pendaftaran Ekskul')

@section('content')

<section class="section" style="background:#FFFDF5;min-height:70vh;">
    <div class="container">

        <div style="max-width:750px;margin:40px auto;">

            <div style="margin-bottom:30px;">
                <p style="color:#6C4AB6;font-size:12px;font-weight:800;letter-spacing:1px;margin-bottom:8px;">
                    PENDAFTARAN EKSTRAKURIKULER
                </p>

                <h1 style="font-size:clamp(36px,5vw,52px);line-height:1.05;letter-spacing:-2px;margin-bottom:12px;">
                    Cek status pendaftaran.
                </h1>

                <p style="color:#6F6B7A;">
                    Masukkan nomor siswa untuk melihat status pendaftaran ekstrakurikulermu.
                </p>
            </div>

            <div style="background:white;border-radius:24px;padding:30px;border:1px solid #eee8d9;box-shadow:0 12px 35px rgba(37,35,51,.06);margin-bottom:25px;">

                <form method="GET" action="/cek-status-ekskul">

                    <label style="display:block;font-size:13px;font-weight:800;margin-bottom:8px;">
                        Nomor Siswa
                    </label>

                    <input type="text" name="student_number" value="{{ request('student_number') }}" placeholder="Contoh: 001" required style="width:100%;padding:14px;border:1px solid #ddd;border-radius:10px;margin-bottom:15px;">

                    <button type="submit" class="btn">
                        Cek Status →
                    </button>

                </form>

            </div>

            @if(request()->filled('student_number'))

            @if($registration)

            <div style="background:white;border-radius:24px;padding:30px;border:1px solid #eee8d9;box-shadow:0 12px 35px rgba(37,35,51,.06);">

                <p style="font-size:12px;font-weight:800;color:#6C4AB6;letter-spacing:1px;margin-bottom:8px;">
                    HASIL PENDAFTARAN
                </p>

                <h2 style="font-size:28px;margin-bottom:5px;">
                    {{ $registration->extracurricular->name }}
                </h2>

                <p style="color:#6F6B7A;margin-bottom:25px;">
                    {{ $registration->student_name }} · {{ $registration->class }}
                </p>

                @if($registration->status === 'pending')

                <div style="background:#FFF8DF;border-radius:16px;padding:20px;">
                    <strong style="color:#C78A00;">🟡 Menunggu Verifikasi</strong>
                    <p style="color:#6F6B7A;font-size:14px;margin-top:6px;">
                        Data pendaftaranmu sedang diperiksa oleh pengurus.
                    </p>
                </div>

                @elseif($registration->status === 'verified')

                <div style="background:#EAF4FF;border-radius:16px;padding:20px;">
                    <strong style="color:#2874A6;">🔵 Sedang Diproses</strong>
                    <p style="color:#6F6B7A;font-size:14px;margin-top:6px;">
                        Pendaftaranmu sudah diverifikasi dan sedang diproses.
                    </p>
                </div>

                @elseif($registration->status === 'approved')

                <div style="background:#E8F5EF;border-radius:16px;padding:20px;">
                    <strong style="color:#276749;">🟢 Pendaftaran Disetujui!</strong>
                    <p style="color:#6F6B7A;font-size:14px;margin-top:6px;">
                        Selamat! Kamu sudah diterima sebagai anggota {{ $registration->extracurricular->name }}.
                    </p>

                    @if($registration->extracurricular->whatsapp_group_link)
                    <a href="{{ $registration->extracurricular->whatsapp_group_link }}" target="_blank" rel="noopener noreferrer" class="btn" style="margin-top:15px;background:#F9C74F;color:#252333!important;">
                        Gabung Grup WhatsApp →
                    </a>
                    @endif
                </div>

                @elseif($registration->status === 'rejected')

                <div style="background:#FFF0F0;border-radius:16px;padding:20px;">
                    <strong style="color:#C0392B;">🔴 Pendaftaran Ditolak</strong>
                    <p style="color:#6F6B7A;font-size:14px;margin-top:6px;">
                        Maaf, pendaftaranmu belum dapat diterima.
                    </p>
                </div>

                @endif

            </div>

            @else

            <div style="background:#FFF0F0;border-radius:16px;padding:20px;">
                <strong style="color:#C0392B;">Pendaftaran tidak ditemukan.</strong>
                <p style="color:#6F6B7A;font-size:14px;margin-top:6px;">
                    Periksa kembali nomor siswa yang kamu masukkan.
                </p>
            </div>

            @endif

            @endif

        </div>

    </div>
</section>

@endsection
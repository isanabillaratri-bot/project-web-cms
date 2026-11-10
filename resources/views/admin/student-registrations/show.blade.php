@extends('layouts.admin')

@section('title', 'Detail Pendaftaran Siswa')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Detail Pendaftaran Siswa</h1>

            @if($isArchive)
            <p style="color:#B42318; font-weight:bold;">ARSIP PENDAFTAR</p>
            @else
            <p>Periksa data dan dokumen calon siswa.</p>
            @endif
        </div>

        @if(session('success'))
        <div class="card" style="margin-bottom:20px; color:#1f6f5b;">
            {{ session('success') }}
        </div>
        @endif

        <div class="card">

            <h3>Data Siswa</h3>

            <p><strong>Nama:</strong> {{ $studentRegistration->name }}</p>
            <p><strong>NIK:</strong> {{ $studentRegistration->nik }}</p>

            <p>
                <strong>Jalur Pendaftaran:</strong>
                {{ $studentRegistration->admission_path === 'prestasi' ? 'Prestasi' : 'Tes' }}
            </p>

            <p>
                <strong>Tempat, Tanggal Lahir:</strong>
                {{ $studentRegistration->birth_place }},
                {{ $studentRegistration->birth_date }}
            </p>

            <p><strong>Alamat:</strong> {{ $studentRegistration->address }}</p>
            <p><strong>Asal Sekolah:</strong> {{ $studentRegistration->school_origin }}</p>

            <hr style="margin:25px 0;">

            <h3>Data Orang Tua / Wali</h3>

            <p><strong>Nama Orang Tua:</strong> {{ $studentRegistration->parent_name }}</p>
            <p><strong>No. HP:</strong> {{ $studentRegistration->parent_phone }}</p>

            <hr style="margin:25px 0;">

            <h3>Dokumen Pendaftaran</h3>

            @if($studentRegistration->documents->count())

            @foreach($studentRegistration->documents as $document)

            <div style="padding:15px; margin-bottom:12px; background:#F8F5FF; border-radius:12px;">

                <p style="font-weight:bold; margin-bottom:10px;">
                    {{ $document->document_type }}
                </p>

                <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn">
                    Lihat Dokumen PDF →
                </a>

            </div>

            @endforeach

            @else

            <p>Belum ada dokumen.</p>

            @endif

            <hr style="margin:25px 0;">

            <h3>Status Pendaftaran</h3>

            <p style="margin:10px 0 20px;">
                <strong>Status saat ini:</strong>

                @if($studentRegistration->status === 'pending')
                <span style="color:#C78A00;">Menunggu Verifikasi</span>
                @elseif($studentRegistration->status === 'accepted')
                <span style="color:#276749;">Lolos Verifikasi</span>
                @elseif($studentRegistration->status === 'rejected')
                <span style="color:#B42318;">Tidak Lolos</span>
                @endif
            </p>

            @if(!$isArchive)

            <form action="/admin/student-registrations/{{ $studentRegistration->id }}" method="POST">

                @csrf
                @method('PUT')

                <div style="margin-bottom:20px;">

                    <label><strong>Ubah Status Pendaftaran</strong></label>

                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">

                        <option value="pending" {{ $studentRegistration->status == 'pending' ? 'selected' : '' }}>
                            Menunggu Verifikasi
                        </option>

                        <option value="accepted" {{ $studentRegistration->status == 'accepted' ? 'selected' : '' }}>
                            Lolos Verifikasi
                        </option>

                        <option value="rejected" {{ $studentRegistration->status == 'rejected' ? 'selected' : '' }}>
                            Tidak Lolos
                        </option>

                    </select>

                </div>

                <button type="submit" class="btn">
                    Simpan Status
                </button>

            </form>

            @else

            <p style="color:#B42318; font-size:14px;">
                Data ini merupakan arsip. Status dan data pendaftar tidak dapat diubah.
            </p>

            @endif

            <div style="margin-top:20px;">
                @if($isArchive)
                <a href="/admin/student-registrations/arsip" class="btn">
                    ← Kembali ke Arsip
                </a>
                @elseif($studentRegistration->admission_path === 'prestasi')
                <a href="/admin/student-registrations/prestasi" class="btn">
                    ← Kembali
                </a>
                @else
                <a href="/admin/student-registrations/tes" class="btn">
                    ← Kembali
                </a>
                @endif
            </div>

        </div>

    </div>
</section>

@endsection
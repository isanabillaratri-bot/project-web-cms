@extends('layouts.admin')

@section('title', 'Detail Pendaftaran Siswa')

@section('content')
<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Detail Pendaftaran Siswa</h1>
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
                <strong>Tempat, Tanggal Lahir:</strong>
                {{ $studentRegistration->birth_place }},
                {{ $studentRegistration->birth_date }}
            </p>

            <p><strong>Alamat:</strong> {{ $studentRegistration->address }}</p>

            <p><strong>Asal Sekolah:</strong> {{ $studentRegistration->school_origin }}</p>

            <hr style="margin:25px 0;">

            <h3>Data Orang Tua</h3>

            <p><strong>Nama Orang Tua:</strong> {{ $studentRegistration->parent_name }}</p>

            <p><strong>No. HP:</strong> {{ $studentRegistration->parent_phone }}</p>

            <hr style="margin:25px 0;">

            <h3>Dokumen</h3>

            @if($studentRegistration->documents->count())

            @foreach($studentRegistration->documents as $document)
            <p>
                {{ $document->document_type }}

                <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn">
                    Lihat Dokumen
                </a>
            </p>
            @endforeach

            @else
            <p>Belum ada dokumen.</p>
            @endif

            <hr style="margin:25px 0;">

            <form action="/admin/student-registrations/{{ $studentRegistration->id }}" method="POST">

                @csrf
                @method('PUT')

                <div style="margin-bottom:20px;">
                    <label><strong>Status Pendaftaran</strong></label>

                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">

                        <option value="pending" {{ $studentRegistration->status == 'pending' ? 'selected' : '' }}>
                            Menunggu Verifikasi
                        </option>

                        <option value="verified" {{ $studentRegistration->status == 'verified' ? 'selected' : '' }}>
                            Data Terverifikasi
                        </option>

                        <option value="accepted" {{ $studentRegistration->status == 'accepted' ? 'selected' : '' }}>
                            Diterima
                        </option>

                        <option value="rejected" {{ $studentRegistration->status == 'rejected' ? 'selected' : '' }}>
                            Tidak Lolos
                        </option>

                    </select>
                </div>

                <button type="submit" class="btn">
                    Simpan Status
                </button>

                <a href="/admin/student-registrations" class="btn">
                    Kembali
                </a>

            </form>

        </div>

    </div>
</section>
@endsection
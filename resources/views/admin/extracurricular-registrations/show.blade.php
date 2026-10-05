@extends('layouts.admin')

@section('title', 'Detail Pendaftaran')

@section('content')
<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Detail Pendaftaran</h1>
        </div>

        <div class="card">

            <p>
                <strong>Nama Siswa:</strong>
                {{ $extracurricularRegistration->student_name }}
            </p>

            <p>
                <strong>Ekstrakurikuler:</strong>
                {{ $extracurricularRegistration->extracurricular->name }}
            </p>

            <p>
                <strong>Kelas:</strong>
                {{ $extracurricularRegistration->class }}
            </p>

            <p>
                <strong>No. Siswa:</strong>
                {{ $extracurricularRegistration->student_number }}
            </p>

            <p>
                <strong>No. HP:</strong>
                {{ $extracurricularRegistration->phone }}
            </p>

            <form action="/admin/extracurricular-registrations/{{ $extracurricularRegistration->id }}" method="POST" style="margin-top:25px;">

                @csrf
                @method('PUT')

                <div style="margin-bottom:20px;">
                    <label><strong>Status Pendaftaran</strong></label>

                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">

                        <option value="pending" {{ $extracurricularRegistration->status == 'pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                        <option value="approved" {{ $extracurricularRegistration->status == 'approved' ? 'selected' : '' }}>
                            Disetujui
                        </option>

                        <option value="rejected" {{ $extracurricularRegistration->status == 'rejected' ? 'selected' : '' }}>
                            Ditolak
                        </option>

                    </select>
                </div>

                <button type="submit" class="btn">
                    Simpan Status
                </button>

                <a href="/admin/extracurricular-registrations" class="btn">
                    Kembali
                </a>

            </form>

        </div>

    </div>
</section>
@endsection
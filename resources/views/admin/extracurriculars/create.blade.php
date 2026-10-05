@extends('layouts.admin')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')
<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Tambah Ekstrakurikuler</h1>
        </div>

        @if($errors->any())
        <div class="card" style="margin-bottom:20px; color:#b42318;">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <form action="/admin/extracurriculars" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom:20px;">
                    <label>Nama Ekstrakurikuler</label>
                    <input type="text" name="name" value="{{ old('name') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Foto Ekstrakurikuler</label>
                    <input type="file" name="image" accept="image/*" style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;margin-top:7px;">
                    <p style="font-size:12px;color:#6F6B7A;margin-top:6px;">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </p>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Deskripsi</label>
                    <textarea name="description" rows="6" required style="width:100%; padding:10px; margin-top:8px;">{{ old('description') }}</textarea>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Pembina</label>
                    <input type="text" name="coach" value="{{ old('coach') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Jadwal</label>
                    <input type="text" name="schedule" value="{{ old('schedule') }}" placeholder="Contoh: Jumat, 15.00 - 17.00" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Lokasi</label>
                    <input type="text" name="location" value="{{ old('location') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Kuota</label>
                    <input type="number" name="quota" value="{{ old('quota') }}" min="1" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Status</label>
                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">
                        <option value="active">Aktif</option>
                        <option value="inactive">Tidak Aktif</option>
                    </select>
                </div>

                <div style="margin-bottom:20px;">
                    <label style="font-size:13px;font-weight:800;">Link Grup WhatsApp</label>
                    <input type="url" name="whatsapp_group_link" value="{{ old('whatsapp_group_link') }}" placeholder="https://chat.whatsapp.com/..." style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;margin-top:7px;">
                </div>

                <button type="submit" class="btn">
                    Simpan Ekstrakurikuler
                </button>

                <a href="/admin/extracurriculars" class="btn">
                    Kembali
                </a>

            </form>
        </div>

    </div>
</section>
@endsection
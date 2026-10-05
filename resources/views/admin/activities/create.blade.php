@extends('layouts.admin')

@section('title', 'Tambah Kegiatan')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Tambah Kegiatan</h1>
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

            <form method="POST" action="/admin/activities" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom:20px;">
                    <label>Judul Kegiatan</label>
                    <input type="text" name="title" value="{{ old('title') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Foto Kegiatan</label>

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
                    <label>Tanggal</label>
                    <input type="date" name="date" value="{{ old('date') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Lokasi</label>
                    <input type="text" name="location" value="{{ old('location') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Status</label>
                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">
                        <option value="upcoming">Upcoming</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <button type="submit" class="btn">
                    Simpan Kegiatan
                </button>

                <a href="/admin/activities" class="btn">
                    Kembali
                </a>

            </form>

        </div>

    </div>
</section>

@endsection
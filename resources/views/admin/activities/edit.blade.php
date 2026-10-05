@extends('layouts.admin')

@section('title', 'Edit Kegiatan')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Edit Kegiatan</h1>
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

            <form action="/admin/activities/{{ $activity->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div style="margin-bottom:20px;">
                    <label>Judul Kegiatan</label>
                    <input type="text" name="title" value="{{ old('title', $activity->title) }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Foto Kegiatan</label>

                    @if($activity->image)
                    <div style="
                        margin-top:10px;
                        margin-bottom:12px;
                        width:220px;
                        height:140px;
                        border-radius:12px;
                        overflow:hidden;
                        background:#f5f2ea;
                    ">
                        <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" style="width:100%;height:100%;object-fit:cover;">
                    </div>
                    @endif

                    <input type="file" name="image" accept="image/*" style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;margin-top:7px;">

                    <p style="font-size:12px;color:#6F6B7A;margin-top:6px;">
                        Kosongkan jika tidak ingin mengganti foto. JPG, JPEG, PNG. Maksimal 2 MB.
                    </p>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Deskripsi</label>
                    <textarea name="description" rows="6" required style="width:100%; padding:10px; margin-top:8px;">{{ old('description', $activity->description) }}</textarea>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Tanggal</label>
                    <input type="date" name="date" value="{{ old('date', $activity->date) }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Lokasi</label>
                    <input type="text" name="location" value="{{ old('location', $activity->location) }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Status</label>
                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">
                        <option value="upcoming" {{ $activity->status == 'upcoming' ? 'selected' : '' }}>
                            Upcoming
                        </option>
                        <option value="completed" {{ $activity->status == 'completed' ? 'selected' : '' }}>
                            Completed
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn">
                    Simpan Perubahan
                </button>

                <a href="/admin/activities" class="btn">
                    Kembali
                </a>

            </form>

        </div>

    </div>
</section>

@endsection
@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Tambah Berita</h1>
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

            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom:20px;">
                    <label>Judul Berita</label>
                    <input type="text" name="title" value="{{ old('title') }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Foto Berita</label>

                    <input type="file" name="image" accept="image/*" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:10px; margin-top:7px;">

                    <p style="font-size:12px;color:#6F6B7A;margin-top:6px;">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </p>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Isi Berita</label>
                    <textarea name="content" rows="8" required style="width:100%; padding:10px; margin-top:8px;">{{ old('content') }}</textarea>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Status</label>
                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                <button type="submit" class="btn">
                    Simpan Berita
                </button>

                <a href="/admin/posts" class="btn">
                    Kembali
                </a>

            </form>

        </div>

    </div>
</section>

@endsection
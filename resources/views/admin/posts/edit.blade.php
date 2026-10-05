@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')

<section class="section">
    <div class="container">

        <div style="margin-bottom:30px;">
            <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
            <h1>Edit Berita</h1>
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

            <form action="/admin/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')

                <div style="margin-bottom:20px;">
                    <label>Judul Berita</label>
                    <input type="text" name="title" value="{{ old('title', $post->title) }}" required style="width:100%; padding:10px; margin-top:8px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Isi Berita</label>
                    <textarea name="content" rows="8" required style="width:100%; padding:10px; margin-top:8px;">{{ old('content', $post->content) }}</textarea>
                </div>

                <div style="margin-bottom:20px;">
                    <label>Status</label>
                    <select name="status" required style="width:100%; padding:10px; margin-top:8px;">
                        <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>
                        <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>
                            Published
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn">
                    Simpan Perubahan
                </button>

                <a href="/admin/posts" class="btn">
                    Kembali
                </a>

            </form>

        </div>

    </div>
</section>

@endsection
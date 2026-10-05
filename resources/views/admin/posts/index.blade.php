@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')

<section class="section">
    <div class="container">

        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
            <div>
                <p style="color:#1f6f5b; font-weight:bold;">ADMIN PANEL</p>
                <h1>Kelola Berita</h1>
            </div>

            <a href="/admin/posts/create" class="btn">
                + Tambah Berita
            </a>
        </div>

        @if(session('success'))
        <div class="card" style="margin-bottom:20px; color:#1f6f5b;">
            {{ session('success') }}
        </div>
        @endif

        @if($posts->count())
        <div class="grid">
            @foreach($posts as $post)
            <div class="card">
                <p style="color:#1f6f5b; font-size:13px; font-weight:bold;">
                    {{ strtoupper($post->status) }}
                </p>

                <h3>{{ $post->title }}</h3>

                <p style="margin:10px 0 20px;">
                    {{ \Illuminate\Support\Str::limit($post->content, 120) }}
                </p>

                <a href="/admin/posts/{{ $post->id }}/edit" class="btn">
                    Edit
                </a>

                <form action="/admin/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn" onclick="return confirm('Hapus berita ini?')">
                        Hapus
                    </button>
                </form>
            </div>
            @endforeach
        </div>
        @else
        <div class="card" style="text-align:center;">
            <h3>Belum ada berita</h3>
            <p>Silakan tambahkan berita baru.</p>
        </div>
        @endif

    </div>
</section>

@endsection
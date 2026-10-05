@extends('layouts.admin')

@section('title', 'Login Admin')

@section('content')

<section class="section">
    <div class="container" style="max-width:500px;">

        <div class="card">

            <h2 style="margin-bottom:10px;">
                Login Admin
            </h2>

            <p style="margin-bottom:25px;">
                Masuk untuk mengelola website sekolah.
            </p>

            @if($errors->any())
            <div style="color:#b42318; margin-bottom:20px;">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="/admin/login">
                @csrf

                <div style="margin-bottom:15px;">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required style="width:100%; padding:12px; margin-top:5px;">
                </div>

                <div style="margin-bottom:20px;">
                    <label>Password</label>
                    <input type="password" name="password" required style="width:100%; padding:12px; margin-top:5px;">
                </div>

                <button type="submit" class="btn">
                    Login
                </button>

            </form>

        </div>

    </div>
</section>

@endsection
<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>@yield('title', 'Website Sekolah')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        :root {
            --purple: #6C4AB6;
            --purple-dark: #51358F;
            --yellow: #F9C74F;
            --pink: #F7A8B8;
            --blue: #A9D6E5;
            --cream: #FFFDF5;
            --dark: #252333;
            --muted: #6F6B7A;
            --white: #FFFFFF;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: var(--dark);
            background: var(--cream);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1120px, 90%);
            margin: auto;
        }

        /* NAVBAR */

        .navbar {
            width: 100%;
            z-index: 1000;
        }

        .navbar-home {
            background: rgba(70, 70, 80, 0.35);
            color: white;
            position: absolute;
            top: 0;
            left: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(4px);
        }

        .navbar-page {
            background: #252333;
            color: white;
            position: relative;
        }

        .nav-inner {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 20px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: var(--yellow);
            color: var(--dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: 14px;
        }

        .nav-links a {
            transition: 0.2s;
        }

        .nav-links a:hover {
            color: var(--yellow);
        }

        .nav-button {
            background: var(--yellow);
            color: var(--dark) !important;
            padding: 11px 18px;
            border-radius: 8px;
            font-weight: bold;
        }

        /* GENERAL */

        main {
            min-height: 70vh;
        }

        .section {
            padding: 80px 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .card {
            background: var(--white);
            border-radius: 20px;
            padding: 24px;
            border: 1px solid #eee8d9;
            box-shadow: 0 10px 30px rgba(37, 35, 51, 0.06);
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            color: var(--muted);
        }

        .btn {
            display: inline-block;
            background: var(--purple);
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn:hover {
            background: var(--purple-dark);
        }

        /* FOOTER */

        footer {
            background: var(--dark);
            color: white;
            margin-top: 70px;
        }

        .footer-inner {
            padding: 50px 0;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
        }

        footer h3 {
            margin-bottom: 15px;
        }

        footer p,
        footer a {
            color: #c9c6d2;
            font-size: 14px;
        }

        footer a {
            display: block;
            margin-bottom: 7px;
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 20px 0;
            color: #aaa6b5;
            font-size: 13px;
        }

        /* MOBILE */

        @media (max-width: 800px) {
            .nav-links {
                display: none;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .footer-inner {
                grid-template-columns: 1fr;
            }
        }

        .ekskul-grid {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .ekskul-card {
            width: 100%;
            min-width: 0;
            min-height: 380px;
            color: #252333;
            border-radius: 28px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .ekskul-card-0 {
            background: #F9C74F;
        }

        .ekskul-card-1 {
            background: #F7A8B8;
        }

        .ekskul-card-2 {
            background: #A9D6E5;
        }
    </style>

    @yield('styles')


</head>

<body>


    <!-- NAVBAR -->

    <nav class="navbar {{ request()->is('/') ? 'navbar-home' : 'navbar-page' }}">
        <div class="container nav-inner">

            <a href="/" class="brand">
                <span class="brand-logo">S</span>
                <span>Sekolah Kita</span>
            </a>

            <div class="nav-links">
                <a href="/">Beranda</a>
                <a href="/posts">Berita</a>
                <a href="/activities">Kegiatan</a>
                <a href="/extracurriculars">Ekstrakurikuler</a>
                <a href="/kontak">Kontak</a>

                <a href="/pendaftaran-siswa" class="nav-button">
                    Daftar Siswa
                </a>
            </div>

        </div>
    </nav>


    <!-- CONTENT -->

    <main>
        @yield('content')
    </main>


    <!-- FOOTER -->

    <footer>

        <div class="container footer-inner">

            <div>
                <h3>Sekolah Kita</h3>

                <p>
                    Website resmi sekolah sebagai pusat informasi,
                    kegiatan, berita, dan layanan pendaftaran siswa.
                </p>
            </div>

            <div>
                <h3>Navigasi</h3>

                <a href="/">Beranda</a>
                <a href="/posts">Berita</a>
                <a href="/activities">Kegiatan</a>
                <a href="/extracurriculars">Ekstrakurikuler</a>
            </div>

            <div>
                <h3>Kontak</h3>

                <p>Surakarta, Jawa Tengah</p>
                <p>info@sekolah.sch.id</p>
                <p>0812-3456-7890</p>
            </div>

        </div>

        <div class="container copyright">
            © {{ date('Y') }} Sekolah Kita. All rights reserved.
        </div>

    </footer>


</body>

</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Sekolah')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #243447;
            background: #f8fafc;
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

        .admin-navbar {
            background: #17252f;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .admin-nav-inner {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .admin-brand {
            font-size: 20px;
            font-weight: bold;
        }

        .admin-nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
            font-size: 14px;
        }

        .admin-nav-links a:hover {
            color: #8ed1b9;
        }

        .admin-logout {
            background: #b42318;
            color: white;
            border: none;
            padding: 9px 15px;
            border-radius: 7px;
            cursor: pointer;
        }

        main {
            min-height: 75vh;
        }

        .section {
            padding: 60px 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            border: 1px solid #e8edf2;
            box-shadow: 0 8px 25px rgba(30, 50, 70, 0.05);
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            color: #687585;
            margin-bottom: 8px;
        }

        .btn {
            display: inline-block;
            background: #1f6f5b;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            opacity: 0.9;
        }

        footer {
            background: #17252f;
            color: #bdc8d0;
            margin-top: 50px;
            padding: 25px 0;
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 800px) {
            .admin-nav-links {
                display: none;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    @yield('styles')
</head>

<body>

    <nav class="admin-navbar">
        <div class="container admin-nav-inner">

            <a href="/admin" class="admin-brand">
                Sekolah Kita — Admin
            </a>

            <div class="admin-nav-links">
                <a href="/admin">Dashboard</a>
                <a href="/admin/posts">Berita</a>
                <a href="/admin/activities">Kegiatan</a>
                <a href="/admin/extracurriculars">Ekstrakurikuler</a>
                <a href="/admin/extracurricular-registrations">
                    Pendaftar Ekskul
                </a>
                <a href="/admin/student-registrations">
                    Pendaftar Siswa
                </a>

                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="admin-logout">
                        Logout
                    </button>
                </form>
            </div>

        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        © {{ date('Y') }} Sekolah Kita — Admin Panel
    </footer>

</body>

</html>
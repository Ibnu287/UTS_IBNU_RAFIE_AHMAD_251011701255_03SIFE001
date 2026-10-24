
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galeri Buku')</title>

    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
            background-color: #f8f9fa;
            color: #263238;
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .hero {
            background: linear-gradient(135deg, #173b32, #326b55);
            color: white;
            padding: 65px 25px;
            border-radius: 16px;
        }

        .book-card {
            height: 100%;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.2s;
        }

        .book-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 22px rgba(0,0,0,0.10);
        }

        .book-cover {
            width: 100%;
            height: 260px;
            object-fit: contain;
            background: #eeeeee;
            padding: 10px;
        }

        .page-title {
            font-weight: bold;
            color: #173b32;
        }

        footer {
            background: #173b32;
            color: white;
            margin-top: 60px;
            padding: 22px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark"
     style="background-color: #173b32;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            Galeri Buku
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavigasi"
                aria-controls="menuNavigasi"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavigasi">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.index') ? 'active' : '' }}"
                       href="{{ route('books.index') }}">
                        Koleksi Buku
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                       href="{{ route('about') }}">
                        Tentang Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<footer>
    <div class="container text-center">
        <p class="mb-1">Galeri Buku</p>
        <small>Temukan buku yang sesuai dengan minatmu.</small>
    </div>
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

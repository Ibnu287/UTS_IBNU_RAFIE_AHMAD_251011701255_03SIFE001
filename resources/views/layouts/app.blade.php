
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'RuangBaca - Galeri Buku')</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root {
            --navy: #14213d;
            --gold: #e9b44c;
            --paper: #f7f5f0;
        }

        body {
            background: var(--paper);
            color: #252525;
            font-family: Arial, sans-serif;
        }

        .navbar-custom {
            background: var(--navy);
        }

        .brand-mark {
            color: var(--gold);
            font-weight: 800;
            letter-spacing: 1px;
        }

        .hero {
            background: linear-gradient(120deg, #14213d, #263e65);
            color: white;
            border-radius: 22px;
        }

        .book-card {
            border: 0;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(20, 33, 61, .12);
        }

        .book-cover {
            width: 100%;
            height: 280px;
            object-fit: cover;
            background: #e8e5dd;
        }

        .detail-cover {
            width: 100%;
            max-width: 340px;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,.15);
        }

        .price {
            color: #a66a00;
            font-weight: 800;
        }

        .btn-gold {
            background: var(--gold);
            color: #172033;
            border: none;
            font-weight: 700;
        }

        .btn-gold:hover {
            background: #dba63e;
            color: #172033;
        }

        footer {
            background: var(--navy);
            color: #eee;
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container py-2">
            <a class="navbar-brand brand-mark" href="{{ route('books.index') }}">
                RUANGBACA<span class="text-white">.</span>
            </a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false"
                    aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}#koleksi">Koleksi Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 py-4">
        <div class="container text-center">
            <div class="brand-mark mb-2">RUANGBACA.</div>
            <p class="mb-1">Temukan bacaan untuk membuka wawasan.</p>
            <small>Proyek UTS Rekayasa Web · Galeri Buku</small>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>

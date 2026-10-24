
@extends('layouts.app')

@section('title', 'Tentang Kami - Galeri Buku')

@section('content')

<section class="hero mb-5">
    <p class="text-uppercase mb-2">Tentang Kami</p>

    <h1 class="display-5 fw-bold">
        Mengenal Galeri Buku
    </h1>

    <p class="lead mt-3 mb-0">
        Ruang untuk menemukan buku, mendapatkan pengetahuan,
        dan menikmati berbagai cerita.
    </p>
</section>

<section class="row g-4 mb-5">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100 p-4">
            <h2 class="page-title h4">Siapa Kami?</h2>

            <p>
                Galeri Buku merupakan website katalog buku yang dibuat
                untuk membantu pengunjung melihat berbagai pilihan buku
                dalam satu tempat.
            </p>

            <p class="mb-0">
                Pengunjung dapat mencari buku berdasarkan judul, penulis,
                atau genre, serta membuka halaman detail untuk membaca
                informasi buku.
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100 p-4">
            <h2 class="page-title h4">Tujuan Kami</h2>

            <p>
                Kami ingin membuat informasi buku lebih mudah ditemukan
                dan membantu pengunjung mengenal berbagai jenis bacaan.
            </p>

            <p class="mb-0">
                Website ini juga menjadi proyek pembelajaran pengembangan
                web menggunakan Laravel, Blade Template, dan Bootstrap.
            </p>
        </div>
    </div>
</section>

<section class="card border-0 shadow-sm p-4 text-center">
    <h2 class="page-title h4">Mulai Menjelajahi Buku</h2>

    <p class="text-secondary">
        Temukan buku yang menarik untuk dibaca.
    </p>

    <div>
        <a href="{{ route('books.index') }}" class="btn btn-success">
            Lihat Koleksi Buku
        </a>

        <a href="{{ route('home') }}"
           class="btn btn-outline-secondary ms-2">
            Kembali ke Beranda
        </a>
    </div>
</section>

@endsection

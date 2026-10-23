
@extends('layouts.app')

@section('title', 'RuangBaca - Koleksi Buku')

@section('content')
<div class="container py-4 py-lg-5">
    <section class="hero p-4 p-lg-5 mb-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge text-bg-warning mb-3">GALERI BUKU DIGITAL</span>
                <h1 class="display-5 fw-bold mb-3">
                    Satu Buku, Banyak Cerita.
                </h1>
                <p class="lead mb-4">
                    Temukan bacaan pilihan untuk menambah wawasan,
                    mengenal dunia baru, dan mengembangkan diri.
                </p>
                <a href="#koleksi" class="btn btn-gold btn-lg px-4">
                    Jelajahi Koleksi
                </a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="border border-light border-opacity-25 rounded-4 p-4">
                    <div class="display-4 fw-bold">{{ $books->count() }}</div>
                    <div>Koleksi Buku Tersedia</div>
                    <hr class="border-light opacity-25">
                    <div class="small">Novel · Fiksi · Pengembangan Diri</div>
                </div>
            </div>
        </div>
    </section>

    <section id="koleksi">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
            <div>
                <p class="text-uppercase small fw-bold text-secondary mb-1">
                    Pilihan Bacaan
                </p>
                <h2 class="fw-bold mb-0">Koleksi Buku</h2>
            </div>

            <form action="{{ route('books.index') }}" method="GET"
                  class="d-flex gap-2" style="max-width: 400px; width: 100%;">
                <input type="search" name="search" class="form-control"
                       placeholder="Cari judul, penulis, genre..."
                       value="{{ $search ?? '' }}">
                <button class="btn btn-dark" type="submit">Cari</button>
            </form>
        </div>

        @if($search)
            <p class="text-secondary">
                Hasil pencarian untuk: <strong>{{ $search }}</strong>
                <a href="{{ route('books.index') }}" class="ms-2">Hapus pencarian</a>
            </p>
        @endif

        @if($books->isEmpty())
            <div class="bg-white p-5 rounded-4 text-center">
                <h4>Buku tidak ditemukan</h4>
                <p class="text-secondary mb-0">
                    Coba gunakan kata kunci judul, penulis, atau genre lain.
                </p>
            </div>
        @else
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                @foreach($books as $book)
                    <div class="col">
                        <article class="card book-card shadow-sm">
                            <a href="{{ route('books.show', $book) }}">
                                <img
                                    src="{{ asset('assets/images/' . $book->image) }}"
                                    class="book-cover"
                                    alt="Cover {{ $book->title }}">
                            </a>

                            <div class="card-body d-flex flex-column p-3">
                                <span class="badge rounded-pill text-bg-light border align-self-start mb-2">
                                    {{ $book->genre }}
                                </span>

                                <h5 class="fw-bold">{{ $book->title }}</h5>
                                <p class="text-secondary small mb-3">
                                    {{ $book->author }}
                                </p>

                                <div class="mt-auto">
                                    <div class="price mb-3">
                                        Rp{{ number_format($book->price, 0, ',', '.') }}
                                    </div>
                                    <a href="{{ route('books.show', $book) }}"
                                       class="btn btn-dark w-100">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
</div>
@endsection

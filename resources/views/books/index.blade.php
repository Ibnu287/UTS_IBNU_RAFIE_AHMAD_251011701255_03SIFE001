
@extends('layouts.app')

@section('title', 'Koleksi Buku - Galeri Buku')

@section('content')

<div class="mb-4">
    <h1 class="page-title">Koleksi Buku</h1>
    <p class="text-secondary">
        Jelajahi semua buku yang tersedia di Galeri Buku.
    </p>
</div>

<form action="{{ route('books.index') }}" method="GET" class="mb-4">
    <div class="input-group">
        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Cari judul, penulis, atau genre buku..."
            value="{{ request('search') }}"
        >

        <button class="btn btn-success" type="submit">
            Cari Buku
        </button>

        @if(request('search'))
            <a href="{{ route('books.index') }}"
               class="btn btn-outline-secondary">
                Reset
            </a>
        @endif
    </div>
</form>

<div class="row g-4">
    @forelse ($books as $book)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card book-card shadow-sm">
                <img
                    src="{{ asset('assets/images/' . $book->image) }}"
                    class="book-cover"
                    alt="{{ $book->title }}"
                >

                <div class="card-body">
                    <span class="badge text-bg-light mb-2">
                        {{ $book->genre }}
                    </span>

                    <h5 class="fw-bold">{{ $book->title }}</h5>

                    <p class="text-secondary small">
                        {{ $book->author }}
                    </p>

                    <p class="fw-bold text-success">
                        Rp {{ number_format($book->price, 0, ',', '.') }}
                    </p>

                    <a href="{{ route('books.show', $book->id) }}"
                       class="btn btn-success w-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning">
                Buku tidak ditemukan. Coba kata kunci lain.
            </div>
        </div>
    @endforelse
</div>

<div class="mt-4">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary">
        Kembali ke Beranda
    </a>
</div>

@endsection

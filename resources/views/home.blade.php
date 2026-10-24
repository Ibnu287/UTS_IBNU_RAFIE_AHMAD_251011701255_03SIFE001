
@extends('layouts.app')

@section('title', 'Beranda - Galeri Buku')

@section('content')

<div class="hero mb-5">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Selamat Datang di Galeri Buku</h1>
            <p class="lead">
                Temukan berbagai buku menarik untuk menambah
                pengetahuan dan memperluas wawasan.
            </p>
            <a href="{{ route('books.index') }}" class="btn btn-light mt-2">
                Lihat Koleksi Buku
            </a>
        </div>
        <div class="col-md-4 text-center mt-4 mt-md-0">
            <span style="font-size: 100px;">📚</span>
        </div>
    </div>
</div>

<div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
        <div class="card p-4 h-100">
            <h5 class="fw-bold">Beragam Buku</h5>
            <p class="mb-0">Jelajahi koleksi buku dari berbagai genre.</p>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card p-4 h-100">
            <h5 class="fw-bold">Informasi Lengkap</h5>
            <p class="mb-0">Lihat judul, penulis, dan detail buku.</p>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card p-4 h-100">
            <h5 class="fw-bold">Mudah Digunakan</h5>
            <p class="mb-0">Cari buku dengan mudah melalui halaman koleksi.</p>
        </div>
    </div>
</div>

<h2 class="page-title mb-4">Buku Pilihan</h2>

<div class="row">
    @forelse ($featuredBooks as $book)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card book-card shadow-sm">
                <img
                    src="{{ asset('assets/images/' . $book->image) }}"
                    class="book-cover"
                    alt="{{ $book->title }}"
                >

                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="text-muted">{{ $book->author }}</p>

                    <a
                        href="{{ route('books.show', $book->id) }}"
                        class="btn btn-success btn-sm"
                    >
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p>Belum ada buku yang tersedia.</p>
        </div>
    @endforelse
</div>

@endsection

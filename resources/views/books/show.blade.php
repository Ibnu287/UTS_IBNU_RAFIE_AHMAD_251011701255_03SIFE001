
@extends('layouts.app')

@section('title', $book->title . ' - RuangBaca')

@section('content')
<div class="container py-4 py-lg-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('books.index') }}">Beranda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Detail Buku
            </li>
        </ol>
    </nav>

    <div class="bg-white rounded-4 shadow-sm p-4 p-lg-5">
        <div class="row align-items-start g-5">
            <div class="col-md-5 text-center">
                <img
                    src="{{ asset('assets/images/' . $book->image) }}"
                    alt="Cover {{ $book->title }}"
                    class="detail-cover">
            </div>

            <div class="col-md-7">
                <span class="badge text-bg-warning mb-3">
                    {{ $book->genre }}
                </span>

                <h1 class="display-6 fw-bold mb-3">{{ $book->title }}</h1>

                <p class="text-secondary mb-4">
                    Ditulis oleh <strong>{{ $book->author }}</strong>
                </p>

                <div class="border-top border-bottom py-3 mb-4">
                    <div class="small text-secondary mb-1">Harga Buku</div>
                    <div class="price fs-2">
                        Rp{{ number_format($book->price, 0, ',', '.') }}
                    </div>
                </div>

                <h5 class="fw-bold">Ringkasan Buku</h5>
                <p class="text-secondary" style="line-height: 1.9;">
                    {{ $book->summary }}
                </p>

                <div class="d-flex flex-wrap gap-2 mt-4">
                    <a href="{{ route('books.index') }}"
                       class="btn btn-dark px-4">
                        &larr; Kembali ke Koleksi
                    </a>
                    <button type="button" class="btn btn-outline-secondary"
                            onclick="window.print()">
                        Cetak Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

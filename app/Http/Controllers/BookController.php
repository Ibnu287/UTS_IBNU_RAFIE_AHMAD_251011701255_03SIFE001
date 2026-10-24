<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home()
    {
        $featuredBooks = Book::latest()->take(4)->get();

        return view('home', compact('featuredBooks'));
    }

    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhere('genre', 'like', "%{$search}%");
            });
        }

        $books = $query->latest()->get();

        return view('books.index', compact('books'));
    }

    public function about()
    {
        return view('about');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}

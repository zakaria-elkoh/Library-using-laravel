<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(BookRequest $request)
    {

        Book::create($request);
        return redirect('/');
    }

    public function edit($id)
    {

        $target_book = Book::findOrFail($id);
        return view('posts.edit', compact('target_book'));
    }

    public function update(Request $request)
    {
        $target_book = Book::findOrFail($request->id);
        $success = $target_book->update([
            'title' => $request->title,
            'description' => $request->description,
            'publication_year' => $request->publication_year,
            'author' => $request->author,
            'total_copies' => $request->total_copies,
            'available_copies' => $request->available_copies
        ]);
        return redirect('/home');
    }

    public function delete()
    {
    }
}

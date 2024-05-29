<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('authors')->get();
        return $books;
    }

    public function showBookByAuthorName(Request $request)
    {
        $author_name = $request->query('author_name');
        $books = Book::whereHas('authors', function ($query) use ($author_name) {
            $query->where('name', 'LIKE', '%' . $author_name . '%');
        })->with('authors')->get();

        return $books;
    }

    public function showBookByTitle(Request $request)
    {
        $title = $request->query('title');
        $books = Book::where('title', 'LIKE', '%'. $title. '%')->with('authors')->get();
        return $books;
    }

    //only one author per book
//    public function showBookByAuthorName(Request $request){
//        $author_name = $request->query('author_name');
//        $books = Book::where('author_name', $author_name)->get();
//        return $books;
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}

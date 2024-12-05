<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where('stock','>', 30)->get();
        return view('books.index')->with('books', $books);
       // return 'alin';
    }
}
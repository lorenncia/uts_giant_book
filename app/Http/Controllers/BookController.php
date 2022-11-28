<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
   public function home()
   {
      $books = Book::with('publisher')->paginate(4);

      return view('giant-book-supplier.home', compact('books'));
   }

   public function view(Book $book)
   {
      return view('giant-book-supplier.book.view', compact('book'));
   }
}

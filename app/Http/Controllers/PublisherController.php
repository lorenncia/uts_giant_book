<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;

class PublisherController extends Controller
{
   public function view()
   {
      $publishers = Publisher::orderBy('name')->paginate(4);

      return view('giant-book-supplier.publisher.view', compact('publishers'));
   }

   public function viewDetail(Publisher $publisher)
   {
      $books = Book::with('publisher')
                                 ->where('publisher_id', $publisher->id)
                                 ->paginate(4);

      return view('giant-book-supplier.publisher.view-detail', compact('books', 'publisher'));
   }
}

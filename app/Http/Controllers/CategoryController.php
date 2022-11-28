<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Category;

class CategoryController extends Controller
{
   public function view(Category $category)
   {
      $bookCategories = BookCategory::with('book')
                        ->where('category_id', $category->id)
                        ->paginate(4);
      return view('giant-book-supplier.category.view', compact('bookCategories', 'category'));
   }
}

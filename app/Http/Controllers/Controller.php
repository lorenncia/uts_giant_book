<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categories;

    public function __construct()
    {
        $this->categories = Category::orderBy('name')->paginate(4);
        View::share('categories', $this->categories);
    }

    public function contact()
    {
        return view('giant-book-supplier.contact');
    }
}

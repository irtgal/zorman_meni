<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $all = array();
        $categories = Category::orderBy('sort')->get();
        return $categories;
    }
    
}

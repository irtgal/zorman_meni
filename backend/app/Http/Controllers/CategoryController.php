<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    public function listAll(Request $request)
    {
        $all = array();
        $categories = Category::orderBy('sort')->get();
        foreach($categories as $category) {
            $items = Item::where('cid', $category->id)->where('active', true)->get();
            Log::debug($category->id);
            $key = $category->name . '#' . $category->id;
            $all[$key] = $items;
        }
        return $all ;
    }
    
}

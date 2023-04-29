<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{

    public function clientIndex()
    {
        $categories = Category::with('activeItems')->get();
        // REMOVE CATEGORIES WITH NO ACTIVE ITEMS
        $categories = $categories->filter(function ($category) {
            return $category->activeItems->count() > 0;
        });        
        return $categories;
    }


    // all items
    public function index()
    {
        return Item::orderBy('updated_at', 'DESC')->with('category')->get();
    }

    // only active items
    public function active()
    {
        return Item::orderBy('updated_at', 'DESC')->where('active', true)->get();
    }
    
    // inactive items
    public function inactive()
    {
        return Item::where('active', false)->get();
    }

    public function setActive(Request $request)
    {
        $ids = $request->ids;
        foreach($ids as $id) {
            $existingItem = Item::findOrFail($id);
            $existingItem->active = true;
            $existingItem->save();
        }
        return 'Success';
    }
    // will this work for query parameters?
    // public function setActive(Request $request)

    public function setInActive(Request $request)
    {
        $ids = $request->ids;
        foreach($ids as $id) {
            $existingItem = Item::findOrFail($id);
            $existingItem->active = false;
            $existingItem->save();
        }
        return 'Success';
    }


    public function store(Request $request)
    {
        $newItem = new Item();
        $data = $request->all();
        $newItem->name = $data['name'];
        $newItem->category_id = $data['categoryId'];
        $newItem->description = $data['description'];
        $newItem->active = false;
        $newItem->save();
        return $newItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingItem = Item::findOrFail($id);
        $existingItem->update($request->all());
        $existingItem->save();
        return "Uspešno posodobljeno";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingItem = Item::findOrFail($id);
        $existingItem->delete();
        return "Uspešno izbrisano";
    }

}


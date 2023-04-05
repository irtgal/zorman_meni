<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Item::orderBy('updated_at', 'DESC')->where('active', true)->get();
    }
    
    public function inactive()
    {
        return Item::where('active', false)->get();
    }

    public function setActive(Request $request, $id)
    {
        $existingItem = Item::findOrFail($id);
        $existingItem->active = true;
        $existingItem->save();
        return 'Success';
    }





    public function store(Request $request)
    {
        $newItem = new Item();
        $data = $request->all();
        $newItem->name = $data['name'];
        $newItem->price = $data['price'];
        $newItem->description = $data['description'];
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
    public function remove($id)
    {
        $existingItem = Item::findOrFail($id);
        $existingItem->active = false;
        $existingItem->save();
        return "Uspešno odstranjeno";
    }




}


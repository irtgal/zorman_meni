<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin/items', [ItemController::class, 'index']);
Route::prefix('/admin/item')->group( function () {
    Route::post('/store', [ItemController::class, 'store']);
    Route::put('/{id}', [ItemController::class, 'update']);
    Route::delete('/{id}', [ItemController::class, 'destroy']);

});
Route::post('admin/item/set_active/{id}', [ItemController::class, 'setActive']);
Route::post('admin/item/remove/{x}', [ItemController::class, 'remove']);
Route::get('admin/items/inactive', [ItemController::class, 'inactive']);
Route::get('/admin/categories/list_all', [CategoryController::class, 'listAll']);

<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
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

Route::post('/login', [LoginController::class, 'login']);

// PROTECTED ROUTES
Route::middleware('auth:api')->group(function () {

    Route::get('/admin/items', [ItemController::class, 'index']);
    Route::get('admin/items/active', [ItemController::class, 'active']);
    Route::get('admin/items/inactive', [ItemController::class, 'inactive']);
    Route::prefix('/admin/item')->group( function () {
        Route::post('/store', [ItemController::class, 'store']);
        Route::put('/{id}', [ItemController::class, 'update']);
        Route::delete('/{id}', [ItemController::class, 'destroy']);
    });

    Route::post('admin/item/set_active/', [ItemController::class, 'setActive']);
    Route::post('admin/item/set_inactive/', [ItemController::class, 'setInActive']);

    // Categories
    Route::get('/admin/categories', [CategoryController::class, 'index']);
});

Route::get('/client/index', [ItemController::class, 'clientIndex']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');


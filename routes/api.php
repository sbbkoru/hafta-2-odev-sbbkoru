<?php

use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\API\v1\CategoriesController;
use App\Http\Controllers\API\v1\ProductsController;
use App\Models\Categories;
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

/* Route::get('categories', [CategoriesController::class, 'index']);

Route::post('categories', [CategoriesController::class, 'store']);

Route::get('categories/{id}', [CategoriesController::class, 'show']);

Route::put('categories/{id}', [CategoriesController::class, 'update']);

Route::delete('categories/{id}', [CategoriesController::class, 'destroy']); */

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function(){
    Route::any('categories/search', [CategoriesController::class, 'search']);
    Route::apiResource('categories', CategoriesController::class);
    Route::get('products/{id}', [ProductsController::class, 'show']);
    Route::get('/logout', [AuthController::class, 'logout']);
});




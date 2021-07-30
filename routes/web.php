<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/login', function(){
    return view('admin.login');
})->name('admin.login');

Route::get('/admin/index', function(){
    return view('admin.index');
})->name('admin.index');

 Route::prefix('/admin/category')->group(function(){

    Route::get('/index', [CategoryController::class, 'index'])
    ->name('adminCategoryIndex');

    Route::get('/edit', [CategoryController::class, 'edit'])
    ->name('adminCategoryEdit');

});

Route::prefix('/admin/product')->group(function(){

    Route::get('/index', [ProductController::class, 'index'])
    ->name('adminProductIndex');

    Route::get('/edit', [ProductController::class, 'edit'])
    ->name('adminProductEdit');

});


Route::prefix('/admin/user')->group(function(){

    Route::get('/index', [UserController::class, 'index'])
    ->name('adminUserIndex');

    Route::get('/edit', [UserController::class, 'edit'])
    ->name('adminUserEdit');

});


Route::prefix('/admin/cart')->group(function(){

    Route::get('/index', [CartController::class, 'index'])
    ->name('adminCartIndex');

    Route::get('/view', [CartController::class, 'view'])
    ->name('adminCartView');

});

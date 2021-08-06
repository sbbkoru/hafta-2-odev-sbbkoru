<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {

    $categories = Categories::firstOrCreate(['title' => 'Mobilephone'],
    ['description' => 'en iyi telefonlar', 'slug' => '/ceptelefonu']);

    dd($categories);
    // return view('admin.index');
})->name('admin.index');

Route::resource('Categories', CategoriesController::class)->except(['show']);


Route::get('/login', function(){
    return view('admin.login');
})->name('admin.login');

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');

 Route::prefix('/admin/categories')->group(function(){

    Route::get('/index', [CategoriesController::class, 'index'])
    ->name('adminCategoriesIndex');

    Route::get('/{category}/edit', [CategoriesController::class, 'edit'])
    ->name('adminCategoriesEdit');

    Route::get('/create', [CategoriesController::class, 'create'])
    ->name('adminCategoriesCreate');

    Route::get('/store', [CategoriesController::class, 'store'])
    ->name('adminCategoriesStore');

    Route::get('/delete/{id}', [CategoriesController::class, 'destroy'])
    ->name('adminCategoriesDelete');
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

<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category(){
        return $this->hasOne('App\Models\Categories', 'id', 'categories_id');
    }

    public function index(){

        $products = Products::all();
        $title = 'Ürün Listesi';
        return view('admin.products.index', compact('title', 'products'));
    }

    public function edit($id){
        $product = Products::findOrFail($id);
        $title = 'Ürün Düzenleme';
        $categories = Categories::where('status' , 'a')->get();
        return view('admin.products.edit', compact('product', 'title', 'categories'));
    }

    public function create(){
        $title = 'Ürün Ekle';
        return view('admin.products.create', compact('title'));
    }

    public function store(){
        $input = request()->all();
        Products::create($input);

        return redirect()->route('admin.products.index');
    }

    public function update($id){
        $product = Products::findOrFail($id);
        $input = request()->all();
        $product->fill($input)->save();

        return redirect()->route('admin.products.index')->with('success', 'Güncelleme başarılı!');
    }

    public function destroy($id){
        return Products::destroy($id);
    }
}

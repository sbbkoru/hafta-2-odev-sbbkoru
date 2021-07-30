<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Kategori Sayfası'
        ];
        return view('admin.category.catindex', ['data' => $data]);
    }

    public function edit(){
        $data = [
            'title' => 'Kategori Düzenleme'
        ];
        return view('admin.category.catedit', ['data' => $data]);
    }
}

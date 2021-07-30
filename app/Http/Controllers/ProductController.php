<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Ürün Sayfası'
        ];
        return view('admin.product.productindex', ['data' => $data]);
    }

    public function edit(){
        $data = [
            'title' => 'Ürün Düzenleme'
        ];
        return view('admin.product.productedit', ['data' => $data]);
    }
}

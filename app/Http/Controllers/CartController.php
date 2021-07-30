<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Sepet Sayfası'
        ];
        return view('admin.cart.cartindex', ['data' => $data]);
    }

    public function view(){
        $data = [
            'title' => 'Sepet Düzenleme'
        ];
        return view('admin.cart.cartedit', ['data' => $data]);
    }
}

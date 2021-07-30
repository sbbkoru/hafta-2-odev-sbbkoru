<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Kullanıcı Sayfası'
        ];
        return view('admin.user.userindex', ['data' => $data]);
    }

    public function edit(){
        $data = [
            'title' => 'Kullanıcı Düzenleme'
        ];
        return view('admin.user.useredit', ['data' => $data]);
    }
}

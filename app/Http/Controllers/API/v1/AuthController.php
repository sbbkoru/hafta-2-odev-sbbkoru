<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){

        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);

        $response_ = [
            'user' => $user,
            'token' => $user->createToken('API')->plainTextToken
        ];

        return response($response_, 201);

    }

    public function login(Request $request){
        $input = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $input['email'])->first();

        if(!$user){
            return response([
                'message' => 'Kullanıcı bulunamadı!',
            ], 404);
        }

        if(!Hash::check($input['password'], $user->password)) {
            return response([
                'message' => 'Şifre yanlış!'
            ], 404);
        }

        $token = $user->createToken('API')->plainTextToken;

        return response(compact('user', 'token'), 200);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response(['message' => 'Logged Out'], 200);
    }
}

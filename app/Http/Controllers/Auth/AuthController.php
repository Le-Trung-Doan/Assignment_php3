<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(AuthRequest $request) {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password], $request->remember)){
            return response()->json(Auth::user());

        }else {
            return response()->json('error');
        }
    }



    public function logout() {
        Auth::logout();
        dd(Auth::user());
    }
}

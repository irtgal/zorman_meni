<?php

namespace App\Http\Controllers;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $token = auth()->user()->createToken('API Token')->accessToken;
            // update users-> api_token
            $user = Auth::user();
            $user->api_token = $token->token;
            $user->save();
            return response()->json(['message' => 'Login successful', 'token' => $token->token], 200);
        } else {
            return response()->json(['message' => 'Invalid email or password'], 401);
        }
    }
}



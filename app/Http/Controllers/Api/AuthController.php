<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        $user = User::where('email', $loginData['email'])->first();

        if (!$user) {
            return response(['message' => 'Invalid credential'], 401);
        }

        if(!Hash::check($loginData['password'], $user->password)) {
            return response(['message' => 'Invalid credentiat'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;
        return response(['user' => $user, 'token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response(['message' => 'Logged out'], 200);
    }
}

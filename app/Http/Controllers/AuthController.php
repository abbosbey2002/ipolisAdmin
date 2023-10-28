<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $user=User::where('email', $request->input('email'))->first();

        return response([
            'token' => $user->createToken($request->input('name'))->plainTextToken
        ]);

    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'name' => 'required|email',
            'name' => 'required',
        ]);

       $user = User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => Hash::make( $request->input('password')),
        ]);

       return Response([
        'token' => $user->createToken($request->input('name'))->plainTextToken
       ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }


}

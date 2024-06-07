<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    
    /**
     * mag lalagay ng register
     */
    public function register(Request $request)
    {
        //
        $request->validate([
            'firstname'=> 'required|string|max:20',
            'lastname'=> 'required|string|max:20',
            'email'=> 'required|string|email|unique:users',
            'password'=> 'required|string|min:8|confirmed'
        ]);

        $user= User::create([
            //after the validation
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
           // "firstname" => $user['firstname'],
            "message" => "Successfully registered",
            "access_token" => $token,
            "token_type" => "Bearer"
            
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        

        if (Auth::attempt($request->only('email', 'password'))) {
            // if Authen tication is sucessfull
            $user = Auth::user();
            //generate token
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                "message" => "Welcome po",
                "access_token" => $token,
                "token_type" => "Bearer"
            ], 200);
        } else {
            // if Authentication failed
            return response()->json(['error' => 'User Anauthenticated'], 401);
        }
    }

    public function logout(Request $request)
    {
        //
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            "message" => "Successfully logged out"
        ]);
    }

    /**
     * Display a listing of the resource.
     */
   

    /**
     * Update the specified r  esource in storage.
     */
    

   
}

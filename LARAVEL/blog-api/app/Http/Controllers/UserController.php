<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function register(Request $request){

        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

          //  "12345678" -> Encryptado seria algo como  "$2y$10$1q2w3e4r5t6y7u8i9o0p1q2w3e4r5t6y7u8i9o0p1q2w3e4r5t6y7u8i9o0p"
          
            return response()->json([
                'message' => 'User created successfully',
                'data' => $user
            ], 201);

        }catch(Exception $error){
            return response()->json([
                'error' => $error->getMessage()
            ], 400);

        }
    }

    public function login(Request $request){
    
        try{

            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]);

            //Extraigo las credenciales del request
            $credentials = $request->only('email','password');

            if(!Auth::attempt($credentials) ){
                throw new Exception('Invalid credentials');
            }

            $user = $request->user();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'User logged successfully',
                'user' => $user,
                'token' => $token,
                'token_type' => 'Bearer'
            ]);

        }catch(Exception $error){
            return response()->json([
                'error' => $error->getMessage()
            ], 400);
        }


    }

    public function logout(Request $request){ 

        try{
            // Revocar el token actual del usuario
            // $request->user()->currentAccessToken()->delete();

            //Eliminar todos los tokens del usuario
            $request->user()->tokens()->delete();


            return response()->json([
                'message' => 'User logged out successfully'
            ]);
        }catch(Exception $error){
        return response()->json([
            'error' => $error->getMessage()
        ], 400);
    };

}
}

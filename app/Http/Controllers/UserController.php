<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userValidation(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:20|alpha',
            'last_name' => 'required|string|max:20|alpha',
            'username' => 'required|min:4|alpha|unique:users',
            'email' => 'required|email|unique:users',
        ]);

        return true;
    }

    public function signup(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:20|alpha',
            'last_name' => 'required|string|max:20|alpha',
            'username' => 'required|min:4|alpha|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone' => 'min:11|numeric'
        ]);
        
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        return response()->json([
            'code' => 200,
            'message' => "Success",
            'data' => $user
        ], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $response['message'] = 'Success';
            $response['code'] = 200;
            $response['data'] = Auth::user();
        } else {
            $response['message'] = 'Invalid Email or Password.';
            $response['code'] = 401;
        }

        return response()->json($response, $response['code']);
    }

    public function getUserInfo()
    {
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => Auth::user()
        ]);
    }
}

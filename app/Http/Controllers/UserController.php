<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        
        // $user = User::create($request->all());
        $user = true;
        return response()->json([
            'code' => 200,
            'message' => "Success",
            'data' => $user
        ], 200);
    }
}

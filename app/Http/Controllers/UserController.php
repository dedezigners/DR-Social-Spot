<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
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
        return new UserResource(Auth::user());
    }
    
    public function updateUser(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:20|alpha',
            'last_name' => 'required|string|max:20|alpha',
            'email' => 'required|email',
            'backup_email' => 'nullable|email',
        ]);

        $user = Auth::user();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->backup_email = $request->get('backup_email');
        $user->address = $request->get('address');
        $user->city = $request->get('city');
        $user->postal_code = $request->get('postal_code');
        $user->state = $request->get('state');
        $user->country = $request->get('country');
        $user->save();

        return response()->json([
            'message' => "Profile updated successfully!"
        ], 200);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function apiregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            // 'user_role' => 'required|user_role',
            // 'image' => 'required|image',
            // 'mobile' => 'required|mobile',
            // 'department' => 'required|department',
            // 'address' => 'required|address',
            'password' => 'required|min:8',

        ]);
  
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_role' => $request->user_role,
            'image' => $request->image,
            'mobile' => $request->mobile,
            'department' => $request->department,
            'address' => $request->address,
            'password' => bcrypt($request->password)
        ]);
  
        $token = $user->createToken('Laravel8PassportAuth')->accessToken;
  
        return response()->json(['token' => $token], 200);
    }
  
    /**
     * Login Req
     */
    public function apilogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
  
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            return response()->json(['token' => $token, 'user' => auth()->user()], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
 
    public function userInfo() 
    {
 
     $user = auth()->user();
      
     return response()->json(['user' => $user], 200);
 
    }
}

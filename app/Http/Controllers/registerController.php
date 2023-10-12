<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function register(){
        return view('frontEnd.register.register');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->user_role = 'User';
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('message', 'Info save successfully');

    }
}

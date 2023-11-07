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
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'address' => 'required|string|max:255',
            'mobile' => 'required|digits:10',
            'password' => 'required|string|min:8',
        ];
    
        // Define custom validation error messages
        $messages = [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already in use.',
            'address.required' => 'The address field is required.',
            'mobile.required' => 'The mobile field is required.',
            'mobile.digits' => 'The mobile field must be 10 digits long.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
        ];
    
    
        $validatedData = $request->validate($rules, $messages);
    
      
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->address = $validatedData['address'];
        $user->mobile = $validatedData['mobile'];
        $user->user_role = 'User';
        $user->password = Hash::make($validatedData['password']);
        $user->save();
    
        return back()->with('message', 'Info saved successfully');
    }
    
}

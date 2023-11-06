<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class User_managementController extends Controller
{
    public function add_user()
    {
        return view('admin.user_management.add_user');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'Whatsapp' => 'required',
            'Telegram' => 'required',
            'email' => 'required|email|unique:users',
            'department' => 'required',
            'address' => 'required',
            'password' => 'required|min:8|confirmed', // Add "confirmed" rule for password
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ], [
            'password.confirmed' => 'Password and Confirm Password do not match',
        ]);
    
        // $validator->setAttributeNames([
        //     'name' => 'Name',
        //     'mobile' => 'Mobile',
        //     'Whatsapp' => 'Whatsapp',
        //     'Telegram' => 'Telegram',
        //     'email' => 'Email',
        //     'department' => 'Department',
        //     'address' => 'Address',
        //     'password' => 'Password',
        // ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $saveuser = new User();
        $saveuser->name = $request->input('name');
        $saveuser->user_role = 'User';
        $saveuser->mobile = $request->input('mobile');
        $saveuser->Whatsapp = $request->input('Whatsapp');
        $saveuser->Telegram = $request->input('Telegram');
        $saveuser->email = $request->input('email');
        $saveuser->department = $request->input('department');
        $saveuser->address = $request->input('address');
    
        // Check if password and password_confirmation match before hashing the password
        if ($request->input('password') === $request->input('password_confirmation')) {
            $saveuser->password = Hash::make($request->input('password'));
        } else {
            return back()->with('error', 'Password and Confirm Password do not match');
        }
    
        if ($request->hasFile('image')) {
            $saveuser->image = $this->saveImage($request);
        } else {
            $saveuser->image = 'adminAsset/user-image/default.jpg';
        }
    
        $saveuser->save();
    
        return back()->with('message', 'Info saved successfully');
    }
    
    private function saveImage($request)
    {
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getclientOriginalExtension();
        $directory = 'adminAsset/user-image/';
        $imgurl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgurl;
    }
    public function all_user()
    {
        return view('admin.user_management.all_user', [
            'saveusers' => User::all()
        ]);
    }

    // public function all_users()
    // {

    //     $saveusers=User::all();
    //     return response()->json(["user" => $saveusers], 200);
    // }

    // public function edit($id)
    // {
    //     $saveuser = User::find($id);
    //     return view('admin.user_management.edit', compact('saveuser'));
    // }

    public function edit($id)
{
    $saveuser = User::find($id);
    $departments = Department::get(); // Retrieve all departments
    return view('admin.user_management.edit', compact('saveuser', 'departments'));
}
    public function update(Request $request, $id)
    {
        $saveuser = User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'Whatsapp' => 'required',
            'Telegram' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // If password and confirm password are provided, validate them.
        if (!empty($request->password) || !empty($request->password_confirmation)) {
            $validator->merge([
                'password' => 'required|min:8|confirmed',
            ]);
        }

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $saveuser->name = $request->name;
        $saveuser->mobile = $request->mobile;
        $saveuser->Whatsapp = $request->Whatsapp;
        $saveuser->Telegram = $request->Telegram;
        $saveuser->email = $request->email;
        $saveuser->department = $request->department;
        $saveuser->address = $request->address;

        // Update the password only if it's provided.
        if (!empty($request->password)) {
            $saveuser->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            $saveuser->image = $this->saveImage($request);
        }

        $saveuser->update();
        return redirect()->route('admin.user_management.all_user');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.user_management.all_user');
    }
}

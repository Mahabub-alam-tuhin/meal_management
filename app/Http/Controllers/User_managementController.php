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
            'email' => 'required|email|unique:users',
            'department' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $saveuser = new User();
        $saveuser->name = $request->input('name');
        $saveuser->user_role = 'User';
        $saveuser->mobile = $request->input('mobile');
        $saveuser->email = $request->input('email');
        $saveuser->department = $request->input('department');
        $saveuser->address = $request->input('address');
        $saveuser->password = Hash::make($request->input('password'));

        if ($request->hasFile('image')) {
            $saveuser->image = $this->saveImage($request);
        }else {
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
        $saveuser->name = $request->name;
        // $saveuser->user_role = $request->user_role;
        $saveuser->mobile = $request->mobile;
        $saveuser->email = $request->email;
        $saveuser->department = $request->department;
        $saveuser->address = $request->address;

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

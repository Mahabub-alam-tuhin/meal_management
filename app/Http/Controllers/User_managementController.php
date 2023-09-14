<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class User_managementController extends Controller
{
    public function add_user()
    {
        return view('admin.user_management.add_user');
    }
    public function store(Request $request)
    {
        //        dd(request()->all());
        $saveuser = new User();
        $saveuser->name = $request->name;
        $saveuser->user_role = $request->user_role;
        $saveuser->mobile = $request->mobile;
        $saveuser->email = $request->email;
        $saveuser->department = $request->department;
        $saveuser->address = $request->address;
        $saveuser->password = $request->password;

        if ($request->hasFile('image')) {
            $saveuser->image = $this->saveImage($request);
        }
        $saveuser->save();
        return back()->with('message', 'Info save successfully');

        //        return $request;

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
}

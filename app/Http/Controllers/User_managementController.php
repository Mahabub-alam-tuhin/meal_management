<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class User_managementController extends Controller
{
    public function add_user()
    {
        return view ('admin.user_management.add_user');
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
        return view ('admin.user_management.all_user', [
            'saveusers' => User::all()
        ]);
    }

    // public function all_users()
    // {
        
    //     $saveusers=User::all();
    //     return response()->json(["user" => $saveusers], 200);
    // }

    public function edit($id)
    {
        $saveuser = User::find($id);
        return view('admin.user_management.edit', compact('saveuser'));
    }

    public function update(Request $request, $id)
    {
        $saveuser = User::find($id);
        $saveuser->name = $request->name;
        $saveuser->user_role = $request->user_role;
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
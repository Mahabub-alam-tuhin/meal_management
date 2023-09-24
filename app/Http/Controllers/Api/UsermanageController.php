<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsermanageController extends Controller
{
    public function all_user()
    {
        
        $users=User::all();
        return response()->json(["user" => $users], 200);
    }

    public function find($id)
    {
        $users = User::find($id);
        return response()->json(["user" => $users], 200);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->user_role = $request->user_role;
        $users->mobile = $request->mobile;
        $users->email = $request->email;
        $users->department = $request->department;
        $users->address = $request->address;
    
        if ($request->hasFile('image')) {
            $users->image = $this->saveImage($request);
        }
        $users->update();
        return response()->json(["user" => $users], 200);
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return response()->json(['message' => 'Info delete successfully'], 200);
    }
}

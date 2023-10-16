<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class user_contactController extends Controller
{
    public function show(){
        $userContact=Settings::all();
        return view('frontEnd.user_contact.show',compact('userContact'));
    }
}

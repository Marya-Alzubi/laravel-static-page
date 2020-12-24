<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function register(Request $request){
        $name=request('name');
        $email=request('email');
        $username=request('username');
        $phone=request('phone');
        $password=request('password');

        $validatedInputs=$request->validate([
            "email"=>"required|email",
            "password" => "required|min:8|max:16",
            "username" => "required",
            "phone" => "required|digits:14 ",
            "name" => "required"
        ]);
        return ("$name  " . "    " . "$email");
        // return view("/admin.register");
        // return "hello";
        // print_r($request->input());

    }
}

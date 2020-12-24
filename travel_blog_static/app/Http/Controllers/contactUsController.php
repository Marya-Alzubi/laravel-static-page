<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactUsController extends Controller
{
    public function contactUs(){
        return view("travelPages.contactUs");
    }
    public function passingData(){
        $firas = "maria is the best hacker";
        return view("travelPages.contactUs" , compact('firas'));
    }


    //udemy
    public function udemy(){
        // $people = [];
        $people = [ "maria" , "firas" , "yacoub"];
        return view("contactFiras" , compact("people"));
    }

}

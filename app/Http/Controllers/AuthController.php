<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }

    public function greet(Request $request){
        //dd($request['fname']);
        $fname = $request['fname'];
        $lname = $request['lname'];
        return view('greeting', ['fname' => $fname, 'lname' => $lname]);
    }
}

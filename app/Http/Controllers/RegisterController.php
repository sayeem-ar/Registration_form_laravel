<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function submit(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $username = $request->input('username');
        $phone = $request->input('phone');
        // $dob removed
        $gender = $request->input('gender');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        // You can add validation and saving logic here

        return view('dashboard', compact('name', 'email', 'username', 'phone', 'gender'));
    }
}

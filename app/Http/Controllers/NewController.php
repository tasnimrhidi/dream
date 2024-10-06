<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewController extends Controller
{
    function login(){
        return view('layout.login');
    }

    function loginPost(Request $request){
        $request->validate([
        'email'=>'required',
        'password'=>'required'
]);
$credential = $request->only('email','password');
if(Auth::attempt($credential)){
return redirect(route('dashboard'))->with("success", "you are logged in");
}
return redirect(route('login-page'))->with("error", "try agian");
}


    function register(){
        return view('layout.register');
    }

    function registerPost(Request $request){
        $request->validate([
            "fullname" => "required",
            "email" => "required",
            "password" => "required"
            ]);
            $user = new User();
            $user->name = $request->fullname;
            $user->email = $request->email;
            $user->password = $request->password;
            if($user->save()){
            return redirect(route("login-page"))->with("success", "user create successfully");
            }
            return redirect(route("register-page"))->with("errors", "faild");
    }

    function logout(){
        Auth::logout();
        return redirect(route('login-page'));
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function halamanRegister(){
        return view('login.register');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }    
        return redirect('/dashboard');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function halamanLogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }    
        return redirect('/dashboard');
    }
    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());
        $input = $request->all();

        User::create($input);
        return back()->with('success','Success! user added');

    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }
}

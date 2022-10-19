<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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



        // $input = $request->all();

        // User::create($input);
        // return back()->with('success','Success! user added');

        $dataUser = array(

            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make( $request->password ),
            'role'      => "pegawai"
        );
        $user_id = DB::table('users')->insertGetId($dataUser);

        $dataPegawai = array(

            'nama_lengkap' => $request->name,
            'user_id'      => $user_id
        );
        DB::table('pegawai')->insert($dataPegawai);
        return redirect('/');

    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }
}

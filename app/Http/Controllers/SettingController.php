<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index(Request $request) {

        if ( $request->halaman == "pengantar" ) {

            // halaman pengantar
            return view('pengaturan.view_pengantar');

        } else if ( $request->halaman == "tugas" ) {

            // halaman surat
            echo "Oke kamu ada dihalaman tugas";

        } else {

            // halaman undangan
            echo "Oke kamu ada dihalaman undangan";
        }
    }
}

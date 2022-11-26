<?php

namespace App\Http\Controllers;

use App\Models\PembuatanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PembuatanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.pembuatansurat');
    }


    public function tambahsurat() {

        $template = DB::table('template_surat')->get();
        return view('surat.tambahsurat', compact('template'));
    }


    public function isi_surat( $id ) {

        $ambilDataTemplateBerdasarkanId = DB::table('template_surat')->where('id', $id)->first();
    
        return view('surat.form-isi-surat', compact('ambilDataTemplateBerdasarkanId'));
    }

    public function cetak_surat( $id ){
        // $template = PembuatanSurat::all();
        $template = PembuatanSurat::where('id', $id)->first();
        $pdf = PDF::loadview('surat.cetak-surat',['template_surat'=>$template]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

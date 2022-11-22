<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PembuatanSurat;

class TamplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historytemplate = PembuatanSurat::all();
        return view('tamplateSurat.index', compact('historytemplate'));
        // return view('tamplateSurat.index');
    }



    // view tambah
    public function tambah()
    {

        return view('tamplateSurat.tambah');
    }


    // proses simpan
    public function proses_simpan(Request $request)
    {

        $struktur_surat = $request->get('struktur-file');

        $data = array(

            'struktur_surat' => $struktur_surat,
            'jenis_surat'    => $request->get('jenis'),
            'status_surat'   => $request->get('status'),
            'is_del'         => 0
        );
        DB::table("template_surat")->insert($data);
        return redirect('TamplateSurat');
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
        $historytemplate = PembuatanSurat::find($id);
        return view('tamplateSurat.edit', compact('$historytemplate'));
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
        $historytemplate = PembuatanSurat::find($id);
        $historytemplate->struktur_surat = $request->struktur_surat;
        $historytemplate->jenis_surat = $request->jenis_surat;
        $historytemplate->status_surat = $request->status_surat;
        $historytemplate->save();

        return redirect()->route('tamplateSurat.index')
            ->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PembuatanSurat::find($id)->delete();
        return redirect()->route('tamplateSurat.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

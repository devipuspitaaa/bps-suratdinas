<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dataPegawai = [

            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'nip' => $request->nip,
        ];

        DB::table('pegawai')->insert( $dataPegawai );

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('pegawai')
            ->with('success', 'Data Berhasil Ditambahkan');

        // return redirect('/pegawai');
        
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
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
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
        $pegawai = Pegawai::find($id);
        $pegawai-> email = $request->email;
        $pegawai-> nama_lengkap = $request->nama_lengkap;
        $pegawai-> nip = $request->nip;
        $pegawai->save();

        return redirect()->route('pegawai.index')
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
        Pegawai::find($id)->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

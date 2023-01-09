<?php

namespace App\Http\Controllers;

use App\Models\PembuatanSurat;
use App\Models\History_surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $historysurat = History_surat::all();
        return view('surat.pembuatansurat', compact('historysurat'));
    }


    public function tambahsurat()
    {

        $template = DB::table('template_surat')->get();
        return view('surat.tambahsurat', compact('template'));
    }


    public function isi_surat($id)
    {

        $ambilDataTemplateBerdasarkanId = DB::table('template_surat')->where('id', $id)->first();

        // ekstrak nilai surat

        $jumlahdigit = 3;
        $urutan = sprintf("%0". $jumlahdigit."s", $ambilDataTemplateBerdasarkanId->kode_2);

        $isi = $ambilDataTemplateBerdasarkanId;

        $kode_surat = $isi->kode_1 . $urutan . $isi->kode_3 . $isi->kode_4 . $isi->kode_5;

        $surat = $ambilDataTemplateBerdasarkanId->struktur_surat;
        $ekstraksi = str_replace('[kode]', $kode_surat, $surat);

        return view('surat.form-isi-surat', compact('ambilDataTemplateBerdasarkanId', 'ekstraksi'));
    }



    public function proses_simpan(Request $request)
    {

        $id = $request->get('id');
        $data = array(

            'user_id'           => Auth::id(),
            'template_id'       => $id,
            'file_historysurat' => $request->struktur_file
        );

        DB::table("history_surat")->insert($data);

        // increment (menambah urutan surat)
        /**
         * 1. Ambil informasi template surat urutan ke berapa 
         * 2. Urutan lama (data lama)
         * 3. Urutan baru dengan rumus (urutan_baru = urutan_lama + 1)
         * 4. Update template surat berdasarkan id_surat atau $id
         */

         // @TODO 1 : Info surat
         $infotemplatesurat = DB::table("template_surat")->where("id", $id)->first();

         // @TODO 2 : urutan lama
         $urutan_lama = $infotemplatesurat->kode_2;

         // @TODO 3 : urutan baru
         $urutan_baru = $urutan_lama + 1;

         // @TODO 4 : update
         $updateurutan = array(

            'kode_2'    => $urutan_baru
         );
         DB::table("template_surat")->where("id", $id)->update($updateurutan);


        return redirect('PembuatanSurat');
    }



    public function cetak_surat($id)
    {
        // $template = PembuatanSurat::all();
        $template = PembuatanSurat::where('id', $id)->first();
        $pdf = PDF::loadview('surat.cetak-surat', ['template_surat' => $template]);
        return $pdf->stream();
    }

    public function update_surat(Request $request, $id){
        $struktur_surat = $request->get('file_historysurat');

        $data = array(
            'user_id' => $request->get('user_id'),
            'template_id'    => $request->get('template_id'),
            'file_historysurat'   => $struktur_surat,
        );
        DB::table("history_surat")->where('id', $id)->update($data);
        return redirect('PembuatanSurat');
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
    public function edit(Request $request, $id)
    {
        $historysurat = History_surat::find($id);
        return view('surat.edit', compact('historysurat'));
        
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
        History_surat::find($id)->delete();
        return redirect()->route('surat.pembuatansurat')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

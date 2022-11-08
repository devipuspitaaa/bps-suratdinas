<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_tugas extends Model
{
    use HasFactory;
    protected $table = "surat_tugas";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nomor_surat',
        'nama_pegawai',
        'nip_pegawai',
        'pangkat',
        'jabatan',
        'golongan_perjadin',
        'tujuan_surattugas',
        'tgl_berangkat',
        'tgl_pulang',
        'durasi_tugas',
        'tgl_surat',
        'transportasi',
        'tempat_tujuan',
        'mata_anggaran',
        'tgl_keluarSPD',
    ];
}

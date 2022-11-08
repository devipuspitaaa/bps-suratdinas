<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_pengantar extends Model
{
    use HasFactory;
    protected $table = "surat_pengantar";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nomor_surat',
        'tgl_surat',
        'tujuan_surat',
        'kota_tujuansurat',
        'dokumen_ygdikirim',
        'banyaknya',
        'keterangan',
        'penerima',
        'nip_penerima',
    ];
}

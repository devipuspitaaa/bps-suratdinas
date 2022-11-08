<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_undangan extends Model
{
    use HasFactory;
    protected $table = "surat_undangan";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nomor_surat',
        'tgl_surat',
        'perihal',
        'kepada',
        'pukul',
        'hari_acara',
        'tgl_acara',
        'tempat_acara',
        'acara',
        'tembusan',
    ];
}

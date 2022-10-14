<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = "surat";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nomor_surat',
        'perihal',
        'lampiran',
        'tanggal_surat',
        'kepada',
        'untuk',
        'isi',
        'status',
    ];
}

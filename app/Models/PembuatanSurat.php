<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembuatanSurat extends Model
{
    use HasFactory;
    protected $table = "template_surat";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'struktur_surat',
        'jenis_surat',
        'status_surat',
        'created_at',
        'updated_at',
        'is_del',
    ];
}

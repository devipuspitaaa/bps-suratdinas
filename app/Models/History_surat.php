<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_surat extends Model
{
    use HasFactory;
    protected $table = "history_surat";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'file_historysurat',
    ];

    // public function history()
    // {
    //     return $this->belongsToMany(Surat_tugas::class);
    //     return $this->belongsToMany(Surat_pengantar::class);
    //     return $this->belongsToMany(Surat_undangan::class);
    // }
}

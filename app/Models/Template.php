<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $table = "template";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'file_surat',
    ];

    public function surat()
    {
        return $this->hasMany(Surat_tugas::class);
        return $this->hasMany(Surat_pengantar::class);
        return $this->hasMany(Surat_undangan::class);
    }
}

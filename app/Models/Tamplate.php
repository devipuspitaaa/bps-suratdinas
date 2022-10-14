<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamplate extends Model
{
    use HasFactory;
    protected $table = "tamplate";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'jenis_surat',
        'file_surat',
    ];
}

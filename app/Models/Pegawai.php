<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'email',
        'nama_lengkap',
        'nip',
        'no_ktp',
        'jenis_kelamin',
        'tanggal_lahir',
        'foto',
        'user_id',
    ];

    public function petugas()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
    'nip', 'nama', 'pangkat', 'gol_ruang', 'jabatan', 'unit', 'user_id'
    ];
    protected $table = 'pegawai';

    public function user(){
        return $this->hasOne(User::class);
    }

    public function bawahan(){
        return $this->hasMany(Pegawai::class, 'bawahan_id');
    }
}

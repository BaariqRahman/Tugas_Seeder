<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    protected $primaryKey = 'kode_matakuliah';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['kode_matakuliah', 'nama_matakuliah', 'sks'];

    // Relasi ke KRS
    public function krs()
    {
        return $this->hasMany(Krs::class, 'kode_matakuliah', 'kode_matakuliah');
    }

    // Relasi ke Jadwal
    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'kode_matakuliah', 'kode_matakuliah');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    public $timestamps = false;
    protected $table = 'tb_pengaduan';
    protected $primarykey = "id_pengaduan";
    protected $fillabe = ['tanggal_pengaduan', 'NIK', 'isi_laporan', 'foto', 'status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model

{
    protected $table = ('kasus');
    protected $fillable = ['tanggal','nama_siswa','pelanggaran','poin','keterangan'];
}
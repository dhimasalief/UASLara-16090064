<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = ('siswa');
    protected $fillable = ['nama_siswa', 'kelas','nis'];
}
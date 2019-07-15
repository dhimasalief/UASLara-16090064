<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model

{
    protected $table = ('pelanggaran');
    protected $fillable = ['pelanggaran','poin'];
}
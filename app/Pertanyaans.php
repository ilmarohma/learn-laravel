<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaans extends Model
{
    protected $fillable = [
        'judul', 'isi'
    ];
}

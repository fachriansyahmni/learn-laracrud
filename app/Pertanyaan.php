<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public $table = "pertanyaan";
    protected $fillable = [
        'judul', 'isi', 'penanya_id',
    ];
}

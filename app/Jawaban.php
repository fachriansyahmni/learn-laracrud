<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    public $table = "jawaban";

    protected $fillable = [
        'jawaban', 'user_id', 'pertanyaan_id',
    ];
}

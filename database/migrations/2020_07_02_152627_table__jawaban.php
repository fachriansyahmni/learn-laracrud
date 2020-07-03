<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableJawaban extends Migration
{
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->longText('jawaban');
            $table->integer('user_id');
            $table->string('pertanyaan_id');
            $table->timestamps();
        });
    }

    public function down()
    {
    }
}

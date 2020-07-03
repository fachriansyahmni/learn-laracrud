<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePertanyaan extends Migration
{
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 120);
            $table->longText('isi');
            $table->integer('penanya_id');
            $table->timestamps();
        });
    }

    public function down()
    {
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('jawaban',function (Blueprint $table) {
        $table->bigIncrements('id')->unique();
        $table->char('isi',255);
        $table->date('tanggal_dibuat');
        $table->date('tanggal_diperbarui')->nullable();
        $table->unsignedBigInteger('profil_id');
        $table->foreign('profil_id')->references('id')->on('profil');
        $table->unsignedBigInteger('pertanyaan_id');
        $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}

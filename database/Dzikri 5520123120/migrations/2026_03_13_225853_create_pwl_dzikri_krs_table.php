<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pwl_dzikri_krs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('npm', 10);
            $table->char('kode_matakuliah', 8);
            $table->timestamps();

            $table->foreign('npm')
                  ->references('npm')
                  ->on('pwl_dzikri_mahasiswa')
                  ->onDelete('cascade');

            $table->foreign('kode_matakuliah')
                  ->references('kode_matakuliah')
                  ->on('pwl_dzikri_matakuliah')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pwl_dzikri_krs');
    }
};
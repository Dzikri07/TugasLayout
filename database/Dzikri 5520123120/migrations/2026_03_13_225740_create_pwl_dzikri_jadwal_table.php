<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pwl_dzikri_jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_matakuliah', 8);
            $table->char('nidn', 10);
            $table->char('kelas', 1);
            $table->string('hari', 10);
            $table->timestamp('jam');
            $table->timestamps();

            $table->foreign('kode_matakuliah')
                  ->references('kode_matakuliah')
                  ->on('pwl_dzikri_matakuliah')
                  ->onDelete('cascade');

            $table->foreign('nidn')
                  ->references('nidn')
                  ->on('pwl_dzikri_dosen')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pwl_dzikri_jadwal');
    }
};
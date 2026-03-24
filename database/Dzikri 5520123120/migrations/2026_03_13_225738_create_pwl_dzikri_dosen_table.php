<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pwl_dzikri_dosen', function (Blueprint $table) {
            $table->char('nidn', 10)->primary();
            $table->string('nama', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pwl_dzikri_dosen');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta', 30);
            $table->string('alamat', 30);
            $table->string('berat_badan', 30);
            $table->string('tinggi_badan', 30);
            $table->string('usia', 30);
            $table->string('profile_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pesertas');
    }
};

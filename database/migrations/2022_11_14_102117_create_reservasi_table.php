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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('notelepon');
            $table->string('alamat');
            $table->string('hari_tanggal');
            $table->string('hari_berakhir')->nullable();
            $table->string('waktu_mulai');
            $table->string('waktu_berakhir');
            $table->string('jenis_reservasi');
            $table->string('keterangan');
            $table->string('status');
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
        Schema::dropIfExists('reservasi');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 50)->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('bahasa', 30)->nullable();
            $table->string('jenis', 30)->nullable();
            $table->string('terbit', 50)->nullable();
            $table->string('halaman', 10)->nullable();
            $table->string('sinopsis1', 700)->nullable();
            $table->string('sinopsis2', 700)->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('buku');
    }
}

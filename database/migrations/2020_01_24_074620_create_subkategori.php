<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkategori', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nama_subkategori');
            $table->String('deskripsi');
            $table->string('long');
            $table->string('lat');
            $table->string('gambar');
            $table->string('no_telp')->nullable();
            $table->Integer('kategori_id')->unsigned();
            $table->timestamps();
            $table->foreign('kategori_id')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subkategori');
    }
}

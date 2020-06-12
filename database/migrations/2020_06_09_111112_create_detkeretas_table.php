<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetkeretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detkeretas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kereta')->nullable();  
            $table->string('no_ka')->nullable();   
            $table->string('jam')->nullable();
            $table->string('kelaska')->nullable();
            $table->string('relasi')->nullable();
            $table->string('progres_stasiun')->nullable();
            $table->unsignedInteger('jalur_id')->nullable();
            $table->unsignedBigInteger('jenis_id')->nullable();
            $table->enum('keterangan',['Normal','Bermasalah'])->nullable();
            $table->timestamps();
            

        });

        Schema::table('detkeretas', function(Blueprint $table){

            $table->foreign('jenis_id')
                  ->references('id')
                  ->on('jeniskeretas')
                  ->onDelete('cascade');  
            $table->foreign('jalur_id')
                  ->references('id')
                  ->on('jalurs')
                  ->onDelete('cascade');
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detkeretas');
    }
}

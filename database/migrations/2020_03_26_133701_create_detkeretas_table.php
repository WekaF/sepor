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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nama_kereta')->nullable();  
            $table->string('no_ka');   
            $table->string('jam');
            $table->unsignedBigInteger('jalur_id');
            $table->string('kelaska');
            $table->string('relasi');
            $table->string('progres_stasiun')->nullable();
            $table->unsignedBigInteger('jenis_id');
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

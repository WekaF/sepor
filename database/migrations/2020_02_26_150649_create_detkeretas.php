<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetkeretas extends Migration
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
            $table->string('jam');
            $table->enum('jalur',['1','2','3'])->nullable();
            $table->string('progres_stasiun')->nullable();
            $table->unsignedBigInteger('jenis_id');
            $table->timestamps();
            
        });

        Schema::table('detkeretas', function(Blueprint $table){

            $table->foreign('jenis_id')
                  ->references('id')
                  ->on('jeniskeretas')
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

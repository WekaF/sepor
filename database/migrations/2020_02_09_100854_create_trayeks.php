<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrayeks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trayeks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trayek_name')->nullable();
            $table->string('trayek_price')->nullable();
            $table->text('trayek_desc')->nullable();
            $table ->String('gambar')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trayeks');
    }
}

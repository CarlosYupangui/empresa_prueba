<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carruselimagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('carrusel', function(Blueprint $table){
            $table->id();
            $table->text('imagen1');
            $table->text('imagen2');
            $table->text('imagen3');
            $table->enum('status', ['ACTIVE', 'DESACTIVATE'])->default('ACTIVE');
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
        Schema::dropIfExists('carrusel');
    }
}

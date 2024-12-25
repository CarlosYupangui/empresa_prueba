<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Misvis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('MisionVison', function(Blueprint $table){
            $table->id();
            $table->text('mision');
            $table->text('vision');
            $table->text('imagenMision');
            $table->text('imagenVision');
            $table->text('imagenPrincipal');
            $table->text('imagenLogo');
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
        Schema::dropIfExists('MisionVison');
    }
}

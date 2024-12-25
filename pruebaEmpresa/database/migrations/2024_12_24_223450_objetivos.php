<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Objetivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('objetivo', function(Blueprint $table){
            $table->id();
            $table->text('Titulo1');
            $table->text('titulo2');
            $table->text('titulo3');
            $table->text('objetivo1');
            $table->text('objetivo2');
            $table->text('objetivo3');
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
        Schema::dropIfExists('objetivo');
    }
}

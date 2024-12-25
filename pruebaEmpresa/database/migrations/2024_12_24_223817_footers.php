<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Footer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('footer', function(Blueprint $table){
            $table->id();
            $table->text('facebook');
            $table->text('instagram');
            $table->text('tiktok');
            $table->text('telefon');
            $table->text('correo');
            $table->text('localizacion');
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
        Schema::dropIfExists('footer');
    }
}

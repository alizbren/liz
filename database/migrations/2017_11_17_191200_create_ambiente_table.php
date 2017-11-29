<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiente', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Nombre");
            $table->string("cod_am");
            $table->integer("sillasc");
            $table->integer("mesasc");
            $table->string("descripcion");
            $table->integer("enchufesc");
            $table->integer("personasc");         
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
        Schema::drop('ambiente');
    }
}

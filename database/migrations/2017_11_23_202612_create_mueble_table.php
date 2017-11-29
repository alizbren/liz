<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mueble', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cod_m");
            $table->string("Nombre");
            $table->string("color");
            $table->string("descripcion");
            $table->integer("id_am");
            $table->integer("Tipo");         
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
        //
    }
}

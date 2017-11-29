<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->date("fecha_inicio");
            $table->date("fecha_final");
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

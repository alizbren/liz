<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cod_m");
            $table->string("Nombre");
            $table->string("email");
            $table->integer("Telefono");
            $table->date("fecha_P");
            $table->date("fecha_E");
            $table->date("fecha_ER");
            $table->string("obserbacion");
            $table->integer("id_U");
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

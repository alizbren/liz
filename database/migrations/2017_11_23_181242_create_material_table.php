<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cod_ma");
            $table->string("Nombre");
            $table->string("color");
            $table->string("tipo");
            $table->string("tamano");
            $table->string("tipoob");
            $table->string("precio");
            $table->string("origenc");
            $table->string("donante");
            $table->date("fecha_ob");
            $table->string("fabricante");
            $table->integer("cantidad");
            $table->integer("evaluado");
            $table->integer("id_ambiente");
            $table->integer("id_mueble");
            $table->integer("id_componentes");         
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

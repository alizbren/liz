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
            $table->string("descripcion");
            $table->integer("estado");
            $table->integer("cantidada");         
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

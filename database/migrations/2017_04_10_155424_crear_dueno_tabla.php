<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearDuenoTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dueno', function (Blueprint $table) {
            $table->increments('id');
        //los  campos
            $table->string("nombres");
            $table->string("apaterno");
            $table->string("amaterno");
            $table->integer("ci");
            $table->string("expedido");
            $table->integer("edad");
            $table->date("fechanac");
            $table->string("correoe");
            $table->integer("telefono");
            $table->integer("celular");
            $table->string("ocupacion");
            $table->string("zona");
            $table->string("tipov");

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

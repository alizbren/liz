<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearMedicoTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            
            $table->string('cd_m');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('ci');
            $table->string('especialidad');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('email1');
            $table->string('email2');

            $table->timestamps();

            $table->primary('cd_m');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medico');
    }
}

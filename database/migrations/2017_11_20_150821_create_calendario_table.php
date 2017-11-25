<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
        public function up()
    {
        Schema::create('calendario', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fechaIni');
            $table->datetime('fechaFin')->nullable();
            $table->boolean('todoeldia')->nullable();
            $table->string('color')->nullable();
            $table->mediumText('titulo')->nullable();
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

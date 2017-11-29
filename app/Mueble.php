<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    protected $table="mueble";
     protected $primaryKey="id";
     protected $fillable = array('Nombre','cod_m','color','id_am','descripcion');

     public function ambiente()
     {
     	return $this->hasMany("App/Ambiente","id_am");
     }
      public function material()
  {

    return $this->hasMany('App\Material', 'id_ambiente', 'id');

  }
}


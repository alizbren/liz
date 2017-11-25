<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
     protected $table="mueble";
     protected $primaryKey="id";
     protected $fillable = array('Nombre','descripcion','id_ambiente','id_mueble','id_componentes');

     public function ambiente()
     {
     	return $this->hasMany("App/Mueble","id_ambiente");
     }
}
 
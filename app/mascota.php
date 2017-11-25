<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    protected $table="mascota";
     protected $primarykey="id";
   
     protected $fillable = array("especie","nombre","iddueno","genero","edadaños","edadmeses","peso","color","raza","esterelizado","procedencia","foto");
     public function Dueno()
     {
     	return $this->hasMany("App/Dueno","iddueno");
     }
    
}
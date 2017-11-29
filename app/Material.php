<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
     protected $table="material";
     protected $primaryKey="id";
     protected $fillable = array('Nombre','cod_ma','color','tipo','tamano','tipoob','precio','origenc','donante','fecha_ob','fabricante','cantidad','evaluado','id_ambiente','id_mueble','id_componentes');

     public function ambiente()
     {
     	return $this->hasMany("App/Mueble","id_ambiente");
     }
}
 
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    protected $table="dueno";
     protected $primarykey="id";
   
     protected $fillable = array("nombres","apaterno","amaterno","ci","expedido","edad","fechanac","correoe","telefono","celular","ocupacion","zona","tipov");
 
public function Mascota()
{
return $this-> hasMany("App\Mascota","iddueno","ci")
}


}

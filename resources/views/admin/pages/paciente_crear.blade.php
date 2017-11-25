@extends('admin.master')
@section('content')

<form action="{{route('paciente.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal"  >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
  

  
<div class="form-group"> 
 <label class="control-label col-sm-2" for="cd_p" >Codigo Paciente </label>
 <div class="col-sm-3">
     <input type="text" name="cd_p" id="cd_p" readonly class="form-control">
        </div>
  </div>

    <div class="form-group">         
      <label class="control-label col-sm-2" for="nombre" >Nombre:</label>
      <div class="col-sm-3">
        <input type="textarea" class="form-control" name="nombre" placeholder="Nombre" onkeyup="poner(this.form)" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="apaterno">Apellido Paterno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" onkeyup="poner(this.form)" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="amaterno">Apellido Materno:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" onkeyup="poner(this.form)" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ci">C.I:</label>
      <div class="col-sm-3">
        <input type="textarea" class="form-control" name="ci" placeholder="C.I"  onkeyup="poner(this.form)" required>
      </div>
    </div>  

    <div class="form-group">
      <label class="control-label col-sm-2" for="fecha_nacimiento">Fecha de Nacimineto:</label>
      <div class="col-sm-3">
        <input type="date" name="fecha_nacimiento" step="1" min="1900-01-01" class="form-control" max="2300-12-31" value="2013-01-01"  placeholder="fecha_nacimiento"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="edad">Edad:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="edad" placeholder="edad" id="edad"  required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Estado_civil">Estado Civil:</label>
      <div class="col-sm-3">
        <select type="textarea" class="form-control" name="Estado_civil" placeholder="Estado_civil" required>
            <option>Soltera
            <option>Casada
            <option>Divorciada
            <option>Viuda
      </select>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefono">Telefono:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="telefono" placeholder="Telefono" >
      </div>
    </div>   
    
    
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-floppy-disk"></span>
        Guardar</button>
      </div>
    </div>

   
  </div> {{--End Col--}}

  
  
    
  </form>
  <script type="text/javascript">
function poner(frm) {
  ///var ci1 = ci.toString(); 
  frm.cd_p.value = frm.nombre.value.substr(0,1) + frm.apaterno.value.substr(0,1) + frm.amaterno.value.substr(0,1)+ frm.ci.value  ; 
  
}
//calcular la edad de una persona
//recibe la fecha como un string en formato español
//devuelve un entero con la edad. Devuelve false en caso de que la fecha sea incorrecta o mayor que el dia actual
function calcular_edad(fecha){

    //calculo la fecha de hoy
    hoy=new Date()
    //alert(hoy)

    //calculo la fecha que recibo
    //La descompongo en un array
    var array_fecha = fecha.split("/")
    //si el array no tiene tres partes, la fecha es incorrecta
    if (array_fecha.length!=3)
       return false

    //compruebo que los ano, mes, dia son correctos
    var ano
    ano = parseInt(array_fecha[2]);
    if (isNaN(ano))
       return false

    var mes
    mes = parseInt(array_fecha[1]);
    if (isNaN(mes))
       return false

    var dia
    dia = parseInt(array_fecha[0]);
    if (isNaN(dia))
       return false


    //si el año de la fecha que recibo solo tiene 2 cifras hay que cambiarlo a 4
    if (ano<=99)
       ano +=1900

    //resto los años de las dos fechas
    edad=hoy.getYear()- ano - 1; //-1 porque no se si ha cumplido años ya este año

    //si resto los meses y me da menor que 0 entonces no ha cumplido años. Si da mayor si ha cumplido
    if (hoy.getMonth() + 1 - mes < 0) //+ 1 porque los meses empiezan en 0
       return edad
    if (hoy.getMonth() + 1 - mes > 0)
       return edad+1

    //entonces es que eran iguales. miro los dias
    //si resto los dias y me da menor que 0 entonces no ha cumplido años. Si da mayor o igual si ha cumplido
    if (hoy.getUTCDate() - dia >= 0)
       return edad + 1

    fecha.edad.value=edad;
} 


</script>

  @stop
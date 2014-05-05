<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">




<!-- FontAwesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<script>
    function cargar()
{
     $('#cont').load('buscarsalida.php');
}
    setInterval(cargar,1000);
</script>
<script>
    function js_yyyy_mm_dd_hh_mm_ss () {
  now = new Date();
  year = "" + now.getFullYear();
  month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
  day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
  hour = "" + now.getHours(); if (hour.length == 1) { hour = "0" + hour; }
  minute = "" + now.getMinutes(); if (minute.length == 1) { minute = "0" + minute; }
  second = "" + now.getSeconds(); if (second.length == 1) { second = "0" + second; }
  return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
}
    
    
    
    
</script>
<script type="text/javascript">
	function play_single_sound() {
		document.getElementById('audiotag1').play();
	}
</script>
<script>
    function buscar(){
    var time= js_yyyy_mm_dd_hh_mm_ss();
    
        
        var data = Array();
        $("#buscar tr").each(function(i, v){
    data[i] = Array();
    $(this).children('td').each(function(ii, vv){
        data[i][ii] = $(this).text();
         
    }); 
    if(data[i][2]==time){
            play_single_sound();
alert("El siguiente grupo ha terminado su tiempo: " + data[i][0]);
}
   
})
    }
    setInterval(buscar,1000);
    
    
    
    
    
</script>



        <meta charset="UTF-8">
        <title></title>
         <script src="js/1.4.3/jquery.min.js"></script>
        
         <script>
        $(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents p').size() + 1;
        
        $('#addScnt').live('click', function() {
             //  $('<p><label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
               
    $('<p><div class="form-group"><label class="col-md-4 control-label" for="nombre">Nombre</label><div class="col-md-4"><input id="nombre_'+ i +'" name="nombre[]" type="text" placeholder="Introduzca nombre" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="apellidos">Apellidos</label><div class="col-md-4"><input id="apellidos_'+ i +'" name="apellidos[]" type="text" placeholder="Introduzca apellidos" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="cumple">Cumpleaños</label><div class="col-md-4"><input id="cumple_'+ i +'" name="cumple[]" type="text" placeholder="Introduzca fecha nacimiento" class="form-control input-md"></div></div><div class="form-group"><label class="col-md-4 control-label" for="padres">Padres</label><div class="col-md-4"><input id="padres_'+ i +'" name="padres[]" type="text" placeholder="Introduzca padres" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="telefono">Telefono</label><div class="col-md-4"><input id="telefono_'+ i +'" name="telefono[]" type="text" placeholder="Introduzca telefono" class="form-control input-md" required=""></div></div><a href="#" id="addScnt">Agregar Niño</a>').appendTo(scntDiv)

    
    
    i++;
                return false;
        });
        
        $('#remScnt').live('click', function() { 
                if( i > 2 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});
        </script>
    
    </head>
    <body>
       <div id="cont">
              
              
          </div>
          
<audio id="audiotag1" src="audio/alerta.mp3" preload="auto"></audio>
       <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Bowling Park</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Registros <b class="caret"></b></a>
             <ul class="dropdown-menu"> <li><a href="mostrar.php">Todos</a></li>
              <li><a href="mostrarhoy.php">Hoy</a></li>
              
             </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Crear <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="createN.php">Niños</a></li>
                    <li><a href="createG.php">Grupos</a></li>
                  
                  <li class="divider"></li>
                  <li class="dropdown-header">Cabezera</li>
                  <li><a href="#">Registros</a></li>
                  
                </ul>
              </li>
              <li><a href="chicosdentro.php">Chicos dentro</a></li>
            </ul>
              
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      <br><br><br><br><br><br>
      
      <!-- END NAVBAR -->
      <div class="container">
          <form class="form-horizontal" action="createG.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Agregar Grupo</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre Grupo</label>  
  <div class="col-md-4">
  <input id="alias" name="alias" type="text" placeholder="Introduzca nombre Grupo" class="form-control input-md" required="">
    
  </div>
</div>



<hr>



<div id="p_scents">
    
    
    <p><div class="form-group"><label class="col-md-4 control-label" for="nombre">Nombre</label><div class="col-md-4"><input id="nombre" name="nombre[]" type="text" placeholder="Introduzca nombre" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="apellidos">Apellidos</label><div class="col-md-4"><input id="apellidos" name="apellidos[]" type="text" placeholder="Introduzca apellidos" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="cumple">Cumpleaños</label><div class="col-md-4"><input id="cumple" name="cumple[]" type="text" placeholder="Usa este formato YYYY-MM-DD" class="form-control input-md"></div></div><div class="form-group"><label class="col-md-4 control-label" for="padres">Padres</label><div class="col-md-4"><input id="padres" name="padres[]" type="text" placeholder="Introduzca padres" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="telefono">Telefono</label><div class="col-md-4"><input id="telefono" name="telefono[]" type="text" placeholder="Introduzca telefono" class="form-control input-md" required=""></div></div></p>

    
    <a href="#" id="addScnt">Agregar Niño</a>
</div>

<hr>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="tiempo">Tiempo</label>
  <div class="col-md-4">
    <select id="tiempo" name="tiempo" class="form-control">
         <option value="0">Introduce tiempo</option>
      <option value="30">30 minutos</option>
      <option value="60">60 minutos</option>
      <option value="90">90 minutos</option>
      <option value="120">120 minutos</option>
      <option value="150">150 minutos</option>
      <option value="180">180 minutos</option>
      <option value="210">210 minutos</option>
      <option value="">Indefinido</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="color">Color Etiqueta</label>  
  <div class="col-md-4">
  <input id="color" name="color" type="text" placeholder="Introduzca Color" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tarifa">Tarifa</label>  
  <div class="col-md-4">
  <input id="tarifa" name="tarifa" type="text" placeholder="Introducir precio en €" class="form-control input-md">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>


</fieldset>
</form>
   </div>  <!--cierre container -->
   
   
   <?php
   //////////////funcion sumar fecha
   
   function sumarMinutosFecha($FechaStr, $MinASumar) {

$FechaStr = str_replace("-"," ", $FechaStr);
$FechaStr = str_replace(":", " ", $FechaStr);

$FechaOrigen = explode(" ", $FechaStr);

$Dia = $FechaOrigen[2];
$Mes = $FechaOrigen[1];
$Ano = $FechaOrigen[0];

$Horas = $FechaOrigen[3];
$Minutos = $FechaOrigen[4];
$Segundos = $FechaOrigen[5];

// Sumo los minutos
$Minutos = ((int)$Minutos) + ((int)$MinASumar);

// Asigno la fecha modificada a una nueva variable
$FechaNueva = date("Y-m-d H:i:s",mktime($Horas,$Minutos,$Segundos,$Mes,$Dia,$Ano));

return $FechaNueva;
}
   
   ?>
        <?php
       $rs = mysql_query("SELECT MAX(id) AS id FROM grupos");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}
$id=$id+1;
       
        // put your code here
        if(isset($_POST['submit'])){
           // $id=  mysql_query("SELECT MAX(id) AS id FROM grupos;");
            
           foreach ($_POST['nombre'] as $key => $nombre) {
                $sql="INSERT INTO chicos(group_id,nombre,apellidos,fecha,padres,telefono) VALUES ('$id','$nombre','".$_POST['apellidos'][$key]."','".$_POST['fecha'][$key]."','".$_POST['padres'][$key]."','".$_POST['telefono'][$key]."');";
                $result1= mysql_query($sql);
             
          
                
            }
            
            
          $alias=$_POST['alias'];
          $entrada=  date("Y-m-d H:i:s");
          $tiempo=$_POST['tiempo'];
          $salida=  sumarMinutosFecha($entrada, $tiempo);
          $tarifa=$_POST['tarifa'];
          $color=$_POST['color'];
          $hoy= date("Y-m-d");
          
          $sql2="INSERT INTO grupos(alias,entrada,tiempo,salida,total,color,hoy) VALUES('$alias','$entrada','$tiempo','$salida','$tarifa','$color','$hoy');";
          $result=mysql_query($sql2) OR die(mysql_error());
          
          if($result1 && $result){ ?> <script> alert("Chicos Guardados"); </script> <?php }else{ ?><script> alert("Chicos No guardados pruebe otra vez"); </script><?php } 
        
        
        $id=0;
        }
        ?>
     
           
<script src="js/bootstrap.min.js"></script>
    
    </body>
</html>

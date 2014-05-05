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
        


<script src="js/sorttable.js"></script>

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
         <ul class="dropdown-menu">    
             <li><a href="mostrar.php">Todos</a></li>
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
      
      <h1 class="text-center">Registros de hoy</h1><br><br>
      <div class="container">
          <div class="row">
          <div class="col-lg-6">
          <h2>Registros Grupos</h2><br>
          <table id="myTable" class="sortable table-striped">
              <thead>
              <tr>
                  <th><strong>Nombre Grupo</strong></th>
                  <th><strong>Entrada</strong></th>
                  <th><strong>Salida</strong></th>
                  <th><strong>Tiempo en minutos</strong> &nbsp;</th>
                  <th><strong>Color Etiqueta</strong> &nbsp;</th>
                  <th><strong>Tarifa</strong> &nbsp;</th>
              </tr>
              </thead>
              <tbody>
              <?php
              $hoy=date('Y-m-d');
              
              $query= "SELECT alias,entrada,salida,tiempo,color,total FROM grupos WHERE hoy='$hoy'";
              $result=  mysql_query($query);
             
              $numero=0;
              while($rows = mysql_fetch_array($result))
              {
                  echo "<tr><td id=\"alias\" width=\"15%\">".$rows["alias"]."</td>";
                 echo "<td width=\"20%\">".$rows["entrada"]."</td>";
                  echo "<td id=\"salida\" width=\"20%\">".$rows["salida"]."</td>";
                  echo "<td width=\"15%\">".$rows["tiempo"]."</td>";
                  echo "<td id=\"color\" width=\"15%\">".$rows["color"]."</td>";
                  echo "<td width=\"10%\">".$rows["total"]."€ </td></tr>";
                  
                  $numero++;
              }
              mysql_free_result($result);
          ?>
              </tbody>
              </table>
          
          </div>
          <div class="col-lg-6">
              <h2>Mostrar Niños del Grupo</h2>
              <div class="form-inline">
                  <form action="chicos.php" method="post">
              <input type="text" name="busqueda" id="busqueda" placeholder="Introduce nombre grupo" class="form-control">
              <button  id="submit" name="submit" class="btn btn-primary">Buscar Niños</button>
              </form>
              </div>
              <div id="contenedor">
                  
              </div>
              
          </div>
          
      </div>
          <br><br><br>
      <div class="row">
         <?php 
         $query2= "SELECT SUM(total) AS suma FROM grupos WHERE hoy='$hoy'";
         $result2=  mysql_query($query2);
         while($row =  mysql_fetch_array($result2)){
         echo "<p>TOTAL RECAUDADO HOY: ".$row['suma']."€</p><br>";
         
         
         
         }
         echo "<p>TOTAL DE GRUPOS HOY: ".$numero."</p>";
         ?> 
         
          
      </div>
          </div>
      
     
        <?php
        // put your code here
        ?>
    <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    </body>
</html>

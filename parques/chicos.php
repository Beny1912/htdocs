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
           <ul class="dropdown-menu">   <li><a href="mostrar.php">Todos</a></li>
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
      
      <div id="contenedor" class="container">
        
                  <h4>Chicos encontrados</h4>
                  <table class="table-striped">
                      <tr>
                  <td><strong>Nombre</strong></td>
                  <td><strong>Apellidos</strong></td>
                      </tr>
                  <?php
                  $hoy=date("Y-m-d");
                  if(isset($_POST['submit'])){
                      $grupo=$_POST['busqueda'];
                    
                      $query2="SELECT nombre,apellidos FROM chicos WHERE group_id IN (SELECT id FROM grupos WHERE alias='$grupo' && hoy= '$hoy');";
                      $result2=mysql_query($query2);
                      
                     $chicos=0;
                      while($row = mysql_fetch_array($result2)){
                         
                          echo "<tr><td width=\"20%\">".$row['nombre']."</td>";
                          echo "<td width=\"20%\">".$row['apellidos']."</td></tr>";
                          
                          $chicos++;
                      }
                  }
                  ?>
                  </table>
                  <br>
                  <p><strong>Chicos encontrados:</strong> <?php echo "".$chicos."</p>"; ?>
              </div>
    
      <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    </body>
</html>
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
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
 
    function getTimeAJAX() {
 
        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    
 
        var time = $.ajax({
 
            url: 'buscarsalida.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;
 
        //actualizamos el div que nos mostrará la hora actual
        document.getElementById("myWatch").innerHTML = "La gente que se van son: "+time;
        
    }
 
    //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
    setInterval(getTimeAJAX,1000);
 
</script>


<meta charset="UTF-8">

        
        <title></title>
    </head>
    <body>
        
          

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
      <div class="container">
      <div id='myWatch'></div>
    </body>
      </div>
        <?php
        // put your code here
        ?>
    
<script src="js/bootstrap.min.js"></script>
     <script src="js/jquery-1.10.2.min.js"></script>
    </body>
</html>

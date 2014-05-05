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
      <div class="container">
          
          
              <div class="col-md-4">
                  <a href="createG.php"><i class="fa fa-group fa-5x fa-border"></i></a>
             
              </div>
              <div class="col-md-4">
                   <a href="mostrarhoy.php"><i class="fa fa-eye fa-5x fa-border"></i></a>
               
               </div>
               
               <div class="col-md-4">
                   <a href="mostrar.php"><i class="fa fa-calendar fa-5x fa-border"></i></a>
               
               </div>
          </div>
         
       
    
     
        <?php
        // put your code here
        ?>
     <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    </body>
</html>

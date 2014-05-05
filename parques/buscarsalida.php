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
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript">

</script>


<script src="js/sorttable.js"></script>


<meta charset="UTF-8">


        <title></title>
    </head>
    <body> 
        <div style="display:none;">
          <table id="buscar" class="sortable table-striped">
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
        
    </body>
    <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
<?php $link = mysqli_connect("localhost", "root", "root", "bolera");

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->





<meta charset="UTF-8">


        <title></title>
    </head>
    <body> 
        <div style="display:none;">
          <table id="buscar" class="sortable table-striped">
              <thead>
              <tr>
                  <th><strong>Id Grupo</strong></th>
                  <th><strong>Entrada</strong></th>
                  <th><strong>Salida</strong></th>
                  
              </tr>
              </thead>
              <tbody>
              <?php
              $hoy=date('Y-m-d');
              
              $query= "SELECT grupo_id,entrada,salida FROM registro WHERE hoy='$hoy'";
              $result=  mysqli_query($link,$query);
             
              $numero=0;
              while($rows = mysqli_fetch_array($result))
              {
                  echo "<tr><td id=\"alias\" width=\"15%\">".$rows["grupo_id"]."</td>";
                 echo "<td width=\"20%\">".$rows["entrada"]."</td>";
                  echo "<td id=\"salida\" width=\"20%\">".$rows["salida"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result);
          ?>
              </tbody>
              </table>
        </div>
        
    </body>

</html>
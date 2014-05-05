<br><br><br>
<div class="row">


<?php $link = mysqli_connect("localhost", "root", "root", "bolera");

?>


        <div class="span6">
            
            <h1>GRUPOS</h1><br>
         <table class="sortable-theme-bootstrap" data-sortable>
              <thead>
              <tr>
                  <th><strong>Id Grupo</strong></th>
                  <th><strong>Entrada</strong></th>
                  <th><strong>Salida</strong></th>
                  <th><strong>Mostrar Grupo</strong></th>
                  
                  
              </tr>
              </thead>
              <tbody>
              <?php
              $hoy=date('Y-m-d');
              //$query="SELECT grupo_id,entrada,salida FROM registro WHERE hoy='$hoy'";
              $query= "SELECT grupo_id, DATE_FORMAT(entrada,'%T') AS entrada, DATE_FORMAT(salida,'%T') AS salida FROM registro AS r WHERE hoy='$hoy' ORDER BY r.salida DESC";
              // $query= "SELECT grupo_id, DATE_FORMAT(entrada,'%T') AS entrada, DATE_FORMAT(salida,'%T') AS salida FROM registro AS r ORDER BY r.salida DESC";
              $result=  mysqli_query($link,$query);
             
              $numero=0;
              while($rows = mysqli_fetch_array($result))
              {
                  echo "<tr><td width=\"15%\">".$rows["grupo_id"]."</td>";
                 echo "<td width=\"20%\">".$rows["entrada"]."</td>";
                  echo "<td width=\"20%\" style=\"background-color:orange\">".$rows["salida"]."</td>";
                  echo "<td width=\"5%\"><a href=\"localhost:8888/bolera/index.php?r=grupo/view&id=".$rows['grupo_id']."\" target=\"_blank\">Mostrar</a></td></tr>";
                  
                 
                  
                  $numero++;
              }
              mysqli_free_result($result);
              
           
          ?>
              </tbody>
              </table>
        </div>

 <div class="span6">
     <h1>SOCIOS</h1><br>
          <table class="sortable-theme-bootstrap" data-sortable>
              <thead>
              <tr>
                  <th><strong>Id Socio</strong></th>
                  <th><strong>Entrada</strong></th>
                  <th><strong>Salida</strong></th>
                  <th><strong>Mostrar Grupo</strong></th>
              </tr>
              </thead>
              <tbody>
              <?php
              $hoy=date('Y-m-d');
               //$query2="SELECT grupo_id,entrada,salida FROM registro WHERE hoy='$hoy'";
              $query2= "SELECT grupo_id,DATE_FORMAT(entrada,'%T') AS entrada, DATE_FORMAT(salida,'%T') AS salida FROM registrosocio AS rs WHERE hoy='$hoy' ORDER BY rs.salida DESC";
              //$query2= "SELECT grupo_id,DATE_FORMAT(entrada,'%T') AS entrada, DATE_FORMAT(salida,'%T') AS salida FROM registrosocio ORDER BY salida DESC";
              
              $result2=  mysqli_query($link,$query2);
             
              $numero=0;
              while($rows2 = mysqli_fetch_array($result2))
              {
                  echo "<tr><td width=\"15%\">".$rows2["grupo_id"]."</td>";
                 echo "<td width=\"20%\">".$rows2["entrada"]."</td>";
                  echo "<td width=\"20%\" style=\"background-color:orange\">".$rows2["salida"]."</td>";
                 echo "<td><a href=\"localhost:8888/bolera/index.php?r=gruposocio/view&id=".$rows2['grupo_id']."\" target=\"_blank\">Mostrar</a></td></tr>";
                  
                  $numero++;
              }
              mysqli_free_result($result2);
              
           
          ?>
              </tbody>
              </table>
        </div>

</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
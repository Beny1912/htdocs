<?php $link = mysqli_connect("localhost", "root", "root", "bolera");

?>


        <div style="display:none;">
          <table id="buscar" class="table-striped">
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
<br><br><br>
 <div style="display:none;">
          <table id="sh" class="table-striped">
              <thead>
              <tr>
                  <th><strong>Id Socio</strong></th>
                  <th><strong>Entrada</strong></th>
                  <th><strong>Salida</strong></th>
                  
              </tr>
              </thead>
              <tbody>
              <?php
              $hoy=date('Y-m-d');
              
              $query2= "SELECT grupo_id,entrada,salida FROM registrosocio WHERE hoy='$hoy'";
              $result2=  mysqli_query($link,$query2);
             
              $numero=0;
              while($rows2 = mysqli_fetch_array($result2))
              {
                  echo "<tr><td id=\"alias\" width=\"15%\">".$rows2["grupo_id"]."</td>";
                 echo "<td width=\"20%\">".$rows2["entrada"]."</td>";
                  echo "<td id=\"salida\" width=\"20%\">".$rows2["salida"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result2);
              
           
          ?>
              </tbody>
              </table>
        </div>

<?php $link = mysqli_connect("localhost", "root", "root", "bolera");
?>
   <div >
          <table class="sortable-theme-bootstrap" data-sortable>
              <thead>
              <tr>
                  <th><strong>Nombre</strong></th>
                  <th><strong>Hora</strong></th>
                  <th><strong>Personas</strong></th>
                  <th><strong>Tiempo</strong></th>
                  <th><strong>Invitados</strong></th>
                   <th><strong>Telefono</strong></th>
                  
              </tr>
              </thead>
              <tbody>
              <?php
              $hoy=date('Y-m-d');
              
              $query= "SELECT nombre,hora,personas,tiempo,telefono,invitados FROM reservas WHERE dia='$hoy'";
              $result=  mysqli_query($link,$query);
             
              $numero=0;
              while($rows = mysqli_fetch_array($result))
              {
                  echo "<tr><td>".$rows["nombre"]."</td>";
                 echo "<td>".$rows["hora"]."</td>";
                 echo "<td>".$rows["personas"]."</td>";
                 echo "<td >".$rows["tiempo"]."</td>";
                  echo "<td >".$rows["invitados"]."</td>";
                  echo "<td >".$rows["telefono"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result);
              
           
          ?>
              </tbody>
              </table>
        </div>
<br><br><br>
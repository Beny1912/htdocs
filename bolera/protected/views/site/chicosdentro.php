
      <br><br><br><br><br><br>
      
      <!-- END NAVBAR -->
      
      <h1 class="text-center">Chicos dentro</h1><br><br>
      <div class="container">
          
         <?php
         $link = mysqli_connect("localhost", "root", "root", "bolera");
         $ahora=date("Y-m-d H:i:s");
         $query="SELECT COUNT(nombre) AS dentro FROM chico WHERE grupo_id IN(SELECT grupo_id FROM registro WHERE salida > '$ahora');";
         $result=  mysqli_query($link,$query);
         
         while($row =  mysqli_fetch_array($result)){
         
            // echo "<h1>CHICOS DENTRO: ".$row['dentro']."</h1>";
             $c=$row["dentro"];
         }
          $query="SELECT COUNT(numero_socio) AS dentro FROM socioG WHERE grupo_id IN(SELECT grupo_id FROM registrosocio WHERE salida > '$ahora');";
         $result=  mysqli_query($link,$query);
         
         while($row =  mysqli_fetch_array($result)){
         
            // echo "<h1>CHICOS DENTRO: ".$row['dentro']."</h1>";
             $a=$row["dentro"];
         }
       
         $suma=$a+$c;
         
         echo "<h1>Chicos Dentro: ".$suma."</h1>";
         ?>
          
          
          </div>
      
      
        <?php
        // put your code here
        ?>
    
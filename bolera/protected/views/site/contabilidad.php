<br><br><br>
<div class="row text-center">
    <h1>CONTABILIDAD</h1>
    
</div>
<hr>
<br><br>
 



<div class="row">
        <div class="span6">
        <h1 class="text-center">Mostrar Ventas Dia</h1>
        <br>
        <h3>Dia en concreto</h3>
        <form action="index.php?r=site/contabilidad" method="POST">
        Dia:
        <?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'dia',
  'attribute'=>'dia',
     'language'=>'es',
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
              // maximum date
    ),
    'htmlOptions'=>array(
        'required'=>'true'
    ),
));
?>
       <button type="submit" name="buscardia" id="buscardia" class="btn btn-primary">Buscar</button> 
        
        
        </form>
       <?php
       if(isset($_POST['buscardia'])){
           $dia=$_POST['dia'];
          // $diaant= strtotime('-1 day',  strtotime($dia));
          // $diaant=date('Y-m-d');
           $id=Yii::app()->db->createCommand("SELECT id FROM cierre WHERE fecha='$dia'")->queryScalar(); 
           $idanterior=$id-1;
           $horainicio=Yii::app()->db->createCommand("SELECT hora FROM cierre WHERE id='$idanterior'")->queryScalar();
           $horafin=Yii::app()->db->createCommand("SELECT hora FROM cierre WHERE fecha='$dia'")->queryScalar();
            $link = mysqli_connect("localhost", "root", "root", "bolera");
            ?>
        <h3>Grupos</h3>
        <table class="sortable-theme-bootstrap" data-sortable>
            <thead>
             <tr>
                  <th><strong>Id Grupo</strong></th>
                  <th><strong>Tarifa</strong></th>
              
                  
              </tr>
              </thead>
              <tbody>
                  
            <?php
            $totalG=Yii::app()->db->createCommand("SELECT SUM(tarifa) FROM registro WHERE salida>='$horainicio' AND salida <'$horafin'")->queryScalar();
              
              $query= "SELECT grupo_id,tarifa FROM registro WHERE salida>='$horainicio' AND salida <'$horafin'";
              $result=  mysqli_query($link,$query);
             
              $numero=0;
              while($rows = mysqli_fetch_array($result))
              {
                  echo "<tr><td width=\"35%\">".$rows["grupo_id"]."</td>";
           
                  echo "<td width=\"50%\">".$rows["tarifa"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result);
              
           
          ?>
              </tbody>
        </table>
        <br>
        <p>Total recaudo por Grupos:<?php echo $totalG;?>€</p>
        <br><br><br>
        <h3>Socios</h3>
        <table class="sortable-theme-bootstrap" data-sortable>
            <thead>
             <tr>
                  <th><strong>Id Grupo</strong></th>
                  <th><strong>Tarifa</strong></th>
              
                  
              </tr>
              </thead>
              <tbody>
                  
            <?php
              $totalS=Yii::app()->db->createCommand("SELECT SUM(tarifa) FROM registrosocio WHERE salida>='$horainicio' AND salida <'$horafin'")->queryScalar();
              $query2= "SELECT grupo_id,tarifa FROM registrosocio WHERE salida>='$horainicio' AND salida <'$horafin'";
              $result2=  mysqli_query($link,$query2);
             
              $numero=0;
              while($rows2 = mysqli_fetch_array($result2))
              {
                  echo "<tr><td width=\"35%\">".$rows2["grupo_id"]."</td>";
           
                  echo "<td width=\"50%\">".$rows2["tarifa"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result2);
              
           
          ?>
              </tbody>
        </table>
        <br>
        <p>Total recaudo por Socios:<?php echo $totalS;?> €</p>
          <p>Total recaudo:<?php $total=$totalG+$totalS; echo $total;?>€</p>   
            
            <?php }
       
       ?> 
        
        <hr>
        <h3>Rango de dias</h3>
        
        <form action="index.php?r=site/contabilidad" method="POST">
        Desde:
        <?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'desde',
  'attribute'=>'desde',
     'language'=>'es',
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
              // maximum date
    ),
    'htmlOptions'=>array(
    'required'=>'true'
    ),
));
?>
        Hasta:
        <?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'hasta',
  'attribute'=>'hasta',
     'language'=>'es',
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
              // maximum date
    ),
    'htmlOptions'=>array(
       'required'=>'true'
    ),
));
?>
        
       <button type="submit" name="buscarv" id="buscarv" class="btn btn-primary">Buscar</button> 
        
        
        </form>
          <?php
       if(isset($_POST['buscarv'])){
           $desde=$_POST['desde'];
           $hasta=$_POST['hasta'];
        
           
           ///////////DESDE
           $iddesde=Yii::app()->db->createCommand("SELECT id FROM cierre WHERE fecha='$desde'")->queryScalar(); 
           $idanteriordesde=$iddesde-1;
           $horainiciodesde=Yii::app()->db->createCommand("SELECT hora FROM cierre WHERE id='$idanteriordesde'")->queryScalar();
           $horafindesde=Yii::app()->db->createCommand("SELECT hora FROM cierre WHERE fecha='$desde'")->queryScalar();
           ////////HASTA       
           $idhasta=Yii::app()->db->createCommand("SELECT id FROM cierre WHERE fecha='$hasta'")->queryScalar(); 
           $idanteriorhasta=$idhasta-1;
           $horainiciohasta=Yii::app()->db->createCommand("SELECT hora FROM cierre WHERE id='$idanteriorhasta'")->queryScalar();
           $horafinhasta=Yii::app()->db->createCommand("SELECT hora FROM cierre WHERE fecha='$hasta'")->queryScalar();
           
            $link = mysqli_connect("localhost", "root", "root", "bolera");
      
            
            ?>
            
            
            
      <h3>Grupos</h3>
        <table class="sortable-theme-bootstrap" data-sortable>
            <thead>
             <tr>
                  <th><strong>Id Grupo</strong></th>
                  <th><strong>Tarifa</strong></th>
              
                  
              </tr>
              </thead>
              <tbody>
                  
            <?php
            $totalG=Yii::app()->db->createCommand("SELECT SUM(tarifa) FROM registro WHERE salida>='$horainiciodesde' AND salida <'$horafinhasta'")->queryScalar();
              
              $query= "SELECT grupo_id,tarifa FROM registro WHERE salida>='$horainiciodesde' AND salida <'$horafinhasta'";
              $result=  mysqli_query($link,$query);
             
              $numero=0;
              while($rows = mysqli_fetch_array($result))
              {
                  echo "<tr><td width=\"35%\">".$rows["grupo_id"]."</td>";
           
                  echo "<td width=\"50%\">".$rows["tarifa"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result);
              
           
          ?>
              </tbody>
        </table>
        <br>
        <p>Total recaudo por Grupos:<?php echo $totalG;?>€</p>
        <br><br><br>
        <h3>Socios</h3>
        <table class="sortable-theme-bootstrap" data-sortable>
            <thead>
             <tr>
                  <th><strong>Id Grupo</strong></th>
                  <th><strong>Tarifa</strong></th>
              
                  
              </tr>
              </thead>
              <tbody>
                  
            <?php
              $totalS=Yii::app()->db->createCommand("SELECT SUM(tarifa) FROM registrosocio WHERE salida>='$horainiciodesde' AND salida <'$horafinhasta'")->queryScalar();
              $query2= "SELECT grupo_id,tarifa FROM registrosocio WHERE salida>='$horainiciodesde' AND salida <'$horafinhasta'";
              $result2=  mysqli_query($link,$query2);
             
              $numero=0;
              while($rows2 = mysqli_fetch_array($result2))
              {
                  echo "<tr><td width=\"35%\">".$rows2["grupo_id"]."</td>";
           
                  echo "<td width=\"50%\">".$rows2["tarifa"]."</td></tr>";
                 
                  
                  $numero++;
              }
              mysqli_free_result($result2);
              
           
          ?>
              </tbody>
        </table>
        <br>
        <p>Total recaudo por Socios:<?php echo $totalS;?> €</p>
          <p>Total recaudo:<?php $total=$totalG+$totalS; echo $total;?>€</p>   
            
            <?php }
       
       ?> 
        
        
        
        
        
        
        
        
        
        
        
        
        
    </div>
    <div class="span6">
    
    <?php $e = Yii::app()->db->createCommand("SELECT SUM(tarifa) as e FROM registro")->queryScalar();
    $f = Yii::app()->db->createCommand("SELECT SUM(tarifa) as f FROM registrosocio")->queryScalar();
    $total=$e+$f;
    ?>
   <?php echo "<h4>Total recauadado desde el inicio: </h4>". $total ." € <br>"; ?>
    <?php echo "<p>Socios: ". $f . " €</p>"; ?>
    <?php echo "<p>No Socios: ". $e . " €</p>"; ?>
</div>
    
</div>   
 <br><br><br><br><br>   
    
<?php
$this->breadcrumbs=array(
	'Gruposocios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Gruposocio','url'=>array('index')),
	array('label'=>'Create Gruposocio','url'=>array('create')),
	array('label'=>'Update Gruposocio','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Gruposocio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gruposocio','url'=>array('admin')),
);
?>

<h1>Ver Grupo de socio #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alias',
	),
)); ?>
<h2> Socios de este grupo</h2>
<table class="sortable-theme-bootstrap" data-sortable>
              <thead>
              <tr>
                  <th><strong>Nombre</strong></th>
                  <th><strong>Apellidos</strong></th>
                 <th><strong>Padres</strong></th>
                  <th><strong>Telefono</strong></th>
              </tr>
              </thead>
              <tbody>
    <?php 
    $link = mysqli_connect("localhost", "root", "root", "bolera");
    $sql="SELECT nombre, apellido, padres, telefono  FROM socio WHERE numero_socio IN(SELECT numero_socio FROM socioG WHERE grupo_id='$model->id')";
    $result=  mysqli_query($link,$sql);
    
    
    $numero=0;
              while($rows = mysqli_fetch_array($result))
              {
                  echo "<tr><td>".$rows["nombre"]."</td>";
                 echo "<td>".$rows["apellido"]."</td>";
             echo "<td>".$rows["padres"]."</td>";
             echo "<td>".$rows["telefono"]."</td></tr>";
             
                 
                  
                  $numero++;
              }
              mysqli_free_result($result);
    ?>
</tbody>
              </table>


<br><br><br>
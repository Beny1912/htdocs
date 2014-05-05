<?php
$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reservas','url'=>array('index')),
	array('label'=>'Manage Reservas','url'=>array('admin')),
);
?>

<h1>Crear Reservas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Chicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Chico','url'=>array('index')),
	array('label'=>'Manage Chico','url'=>array('admin')),
);
?>

<h1>Crear Chico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
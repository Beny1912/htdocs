<?php
$this->breadcrumbs=array(
	'Registrosocios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Registrosocio','url'=>array('index')),
	array('label'=>'Manage Registrosocio','url'=>array('admin')),
);
?>

<h1>Crear Registrosocio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
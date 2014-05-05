<?php
$this->breadcrumbs=array(
	'Cierres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cierre','url'=>array('index')),
	array('label'=>'Manage Cierre','url'=>array('admin')),
);
?>

<h1>Cierre de Caja</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
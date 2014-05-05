<?php
$this->breadcrumbs=array(
	'Peques'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Peques','url'=>array('index')),
	array('label'=>'Create Peques','url'=>array('create')),
	array('label'=>'Update Peques','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Peques','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peques','url'=>array('admin')),
);
?>

<h1>View Peques #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellidos',
		'padres',
		'cumpleanos',
		'telefono',
		'entrada',
		'tiempo',
		'salida',
		'tarifa',
		'total',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Registrosocios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Registrosocio','url'=>array('index')),
	array('label'=>'Create Registrosocio','url'=>array('create')),
	array('label'=>'Update Registrosocio','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Registrosocio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registrosocio','url'=>array('admin')),
);
?>

<h1>Ver Registrosocio #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entrada',
		'tiempo',
		'salida',
		'etiqueta',
		'tarifa',
		'hoy',
		'socio_id',
	),
)); ?>

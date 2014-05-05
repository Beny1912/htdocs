<?php
$this->breadcrumbs=array(
	'Gruposes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Grupos','url'=>array('index')),
	array('label'=>'Create Grupos','url'=>array('create')),
	array('label'=>'Update Grupos','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Grupos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grupos','url'=>array('admin')),
);
?>

<h1>View Grupos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alias',
		'entrada',
		'tiempo',
		'salida',
		'total',
	),
)); ?>

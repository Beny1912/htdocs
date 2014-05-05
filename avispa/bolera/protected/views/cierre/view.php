<?php
$this->breadcrumbs=array(
	'Cierres'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cierre','url'=>array('index')),
	array('label'=>'Create Cierre','url'=>array('create')),
	array('label'=>'Update Cierre','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Cierre','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cierre','url'=>array('admin')),
);
?>

<h1>View Cierre #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'hora',
	),
)); ?>

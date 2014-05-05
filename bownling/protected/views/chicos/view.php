<?php
$this->breadcrumbs=array(
	'Chicoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Chicos','url'=>array('index')),
	array('label'=>'Create Chicos','url'=>array('create')),
	array('label'=>'Update Chicos','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Chicos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chicos','url'=>array('admin')),
);
?>

<h1>View Chicos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'nombre',
		'apellidos',
		'fecha',
		'padres',
		'telefono',
	),
)); ?>

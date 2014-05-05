<?php
$this->breadcrumbs=array(
	'Chicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Chico','url'=>array('index')),
	array('label'=>'Create Chico','url'=>array('create')),
	array('label'=>'Update Chico','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Chico','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chico','url'=>array('admin')),
);
?>

<h1>Ver Chico #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'cumple',
		'padres',
		'telefono',
		'grupo_id',
	),
)); ?>

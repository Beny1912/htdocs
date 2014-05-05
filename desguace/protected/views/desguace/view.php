<?php
$this->breadcrumbs=array(
	'Desguaces'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Desguace','url'=>array('index')),
	array('label'=>'Create Desguace','url'=>array('create')),
	array('label'=>'Update Desguace','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Desguace','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Desguace','url'=>array('admin')),
);
?>
<div class="span10 offset1">
<h1>Ver Desguace #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'cif',
		'direccion',
		'ciudad',
		'provincia',
		'telefono',
		'email',
		'persona_contacto',
	),
)); ?>

</div>
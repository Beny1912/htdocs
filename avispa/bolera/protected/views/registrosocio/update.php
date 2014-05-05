<?php
$this->breadcrumbs=array(
	'Registrosocios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registrosocio','url'=>array('index')),
	array('label'=>'Create Registrosocio','url'=>array('create')),
	array('label'=>'View Registrosocio','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Registrosocio','url'=>array('admin')),
);
?>

<h1>Editar Registrosocio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
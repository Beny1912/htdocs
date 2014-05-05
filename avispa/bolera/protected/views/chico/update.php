<?php
$this->breadcrumbs=array(
	'Chicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Chico','url'=>array('index')),
	array('label'=>'Create Chico','url'=>array('create')),
	array('label'=>'View Chico','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Chico','url'=>array('admin')),
);
?>

<h1>Modificar Chico <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
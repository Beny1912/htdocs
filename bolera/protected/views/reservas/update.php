<?php
$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservas','url'=>array('index')),
	array('label'=>'Create Reservas','url'=>array('create')),
	array('label'=>'View Reservas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Reservas','url'=>array('admin')),
);
?>

<h1>Update Reservas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
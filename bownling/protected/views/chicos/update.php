<?php
$this->breadcrumbs=array(
	'Chicoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Chicos','url'=>array('index')),
	array('label'=>'Create Chicos','url'=>array('create')),
	array('label'=>'View Chicos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Chicos','url'=>array('admin')),
);
?>

<h1>Update Chicos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
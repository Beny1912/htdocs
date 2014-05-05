<?php
$this->breadcrumbs=array(
	'Peques'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Peques','url'=>array('index')),
	array('label'=>'Create Peques','url'=>array('create')),
	array('label'=>'View Peques','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Peques','url'=>array('admin')),
);
?>

<h1>Update Peques <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
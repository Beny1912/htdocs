<?php
$this->breadcrumbs=array(
	'Cierres'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cierre','url'=>array('index')),
	array('label'=>'Create Cierre','url'=>array('create')),
	array('label'=>'View Cierre','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Cierre','url'=>array('admin')),
);
?>

<h1>Update Cierre <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
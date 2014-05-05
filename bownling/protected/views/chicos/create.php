<?php
$this->breadcrumbs=array(
	'Chicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Chicos','url'=>array('index')),
	array('label'=>'Manage Chicos','url'=>array('admin')),
);
?>

<h1>Create Chicos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
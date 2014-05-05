<?php
$this->breadcrumbs=array(
	'Peques'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Peques','url'=>array('index')),
	array('label'=>'Manage Peques','url'=>array('admin')),
);
?>

<h1>Create Peques</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
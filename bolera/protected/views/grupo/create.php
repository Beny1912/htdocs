<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grupo','url'=>array('index')),
	array('label'=>'Manage Grupo','url'=>array('admin')),
);
?>

<h1>Crear Grupo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'chico'=>$chico,'validatedMembers'=>$validatedMembers)); ?>
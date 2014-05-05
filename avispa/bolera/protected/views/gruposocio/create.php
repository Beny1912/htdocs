<?php
$this->breadcrumbs=array(
	'Gruposocios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gruposocio','url'=>array('index')),
	array('label'=>'Manage Gruposocio','url'=>array('admin')),
);
?>

<h1>Crear Grupo de Socios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'socioG'=>$socioG,'validatedMembers'=>$validatedMembers)); ?>
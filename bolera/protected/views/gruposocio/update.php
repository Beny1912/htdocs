<?php
$this->breadcrumbs=array(
	'Gruposocios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gruposocio','url'=>array('index')),
	array('label'=>'Create Gruposocio','url'=>array('create')),
	array('label'=>'View Gruposocio','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Gruposocio','url'=>array('admin')),
);
?>

<h1>Editar Grupo socio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'socioG'=>$socioG,'validatedMembers'=>$validatedMembers)); ?>
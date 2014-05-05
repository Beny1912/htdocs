<?php
$this->breadcrumbs=array(
	'Desguaces'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Desguace','url'=>array('index')),
	array('label'=>'Crear Desguace','url'=>array('create')),
	array('label'=>'Ver Desguace','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manejar Desguace','url'=>array('admin')),
);
?>
<div class="span10 offset1">
<h1>Editar Desguace <?php echo $model->id; ?></h1>
</div>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>


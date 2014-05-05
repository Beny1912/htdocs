<?php
$this->breadcrumbs=array(
	'Desguaces'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Desguace','url'=>array('index')),
	array('label'=>'Manejar Desguace','url'=>array('admin')),
);
?>
<div class="span10 offset1">
<h1>Añadir Desguace</h1>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
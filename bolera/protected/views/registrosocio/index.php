<?php
$this->breadcrumbs=array(
	'Registrosocios',
);

$this->menu=array(
	array('label'=>'Create Registrosocio','url'=>array('create')),
	array('label'=>'Manage Registrosocio','url'=>array('admin')),
);
?>

<h1>Registrosocios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

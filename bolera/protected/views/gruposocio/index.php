<?php
$this->breadcrumbs=array(
	'Gruposocios',
);

$this->menu=array(
	array('label'=>'Create Gruposocio','url'=>array('create')),
	array('label'=>'Manage Gruposocio','url'=>array('admin')),
);
?>

<h1>Gruposocios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

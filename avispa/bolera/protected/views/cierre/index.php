<?php
$this->breadcrumbs=array(
	'Cierres',
);

$this->menu=array(
	array('label'=>'Create Cierre','url'=>array('create')),
	array('label'=>'Manage Cierre','url'=>array('admin')),
);
?>

<h1>Cierres</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

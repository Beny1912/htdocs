<?php
$this->breadcrumbs=array(
	'Chicoses',
);

$this->menu=array(
	array('label'=>'Create Chicos','url'=>array('create')),
	array('label'=>'Manage Chicos','url'=>array('admin')),
);
?>

<h1>Chicoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Chicos',
);

$this->menu=array(
	array('label'=>'Create Chico','url'=>array('create')),
	array('label'=>'Manage Chico','url'=>array('admin')),
);
?>

<h1>Chicos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Reservases',
);

$this->menu=array(
	array('label'=>'Create Reservas','url'=>array('create')),
	array('label'=>'Manage Reservas','url'=>array('admin')),
);
?>

<h1>Reservases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Peques',
);

$this->menu=array(
	array('label'=>'Create Peques','url'=>array('create')),
	array('label'=>'Manage Peques','url'=>array('admin')),
);
?>

<h1>Peques</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

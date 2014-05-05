<?php
$this->breadcrumbs=array(
	'Pedidos',
);

$this->menu=array(
	array('label'=>'Crear Pedido','url'=>array('create')),
	array('label'=>'Manejar Pedido','url'=>array('admin')),
);
?>

<h1>Pedidos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

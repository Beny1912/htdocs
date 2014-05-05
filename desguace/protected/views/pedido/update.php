<?php
$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Pedido','url'=>array('index')),
	array('label'=>'Crear Pedido','url'=>array('create')),
	array('label'=>'Ver Pedido','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manejar Pedido','url'=>array('admin')),
);
?>

<h1>Editar Pedido <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
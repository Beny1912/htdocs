<?php
$this->breadcrumbs=array(
	'Desguaces',
);

$this->menu=array(
	array('label'=>'Crear Desguace','url'=>array('create')),
	array('label'=>'Manejar Desguace','url'=>array('admin')),
);
?>
<div class="span10 offset1">
<h1>Desguaces</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
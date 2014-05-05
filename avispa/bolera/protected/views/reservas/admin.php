<?php
$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Reservas','url'=>array('index')),
	array('label'=>'Create Reservas','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reservas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Reservas</h1>

<p>
Puedes introducir operadores de comparacion como (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada campo.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'reservas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'dia',
		'hora',
		'tiempo',
		'personas',
		
		'telefono',
		'invitados',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

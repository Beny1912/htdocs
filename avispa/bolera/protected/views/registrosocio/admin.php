<?php
$this->breadcrumbs=array(
	'Registrosocios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Registrosocio','url'=>array('index')),
	array('label'=>'Create Registrosocio','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('registrosocio-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Registrosocios</h1>

<p>
Puedes usar operadores de comparacion com (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada valor a buscar.
</p>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'registrosocio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'entrada',
		'tiempo',
		'salida',
		'etiqueta',
		'tarifa',
		/*
		'hoy',
		'socio_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

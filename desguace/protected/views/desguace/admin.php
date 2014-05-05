<?php
$this->breadcrumbs=array(
	'Desguaces'=>array('index'),
	'Manejar',
);

$this->menu=array(
	array('label'=>'Listar Desguace','url'=>array('index')),
	array('label'=>'Crear Desguace','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('desguace-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="span10 offset1">
<h1>Manejar Desguaces</h1>

<p>
Puedes introducir operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada campo de tu busqueda.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'desguace-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'cif',
		'direccion',
		'ciudad',
		'provincia',
		
		'telefono',
		'email',
		'persona_contacto',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</div>
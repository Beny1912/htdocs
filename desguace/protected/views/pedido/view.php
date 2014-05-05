<?php


$this->menu=array(
	array('label'=>'Listar Pedido','url'=>array('index')),
	array('label'=>'Crear Pedido','url'=>array('create')),
	array('label'=>'Editar Pedido','url'=>array('update','id'=>$model->id)),
	array('label'=>'Borrar Pedido','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manejar Pedido','url'=>array('admin')),
);
?>
<br>
<div class="row">
    <div class="row span8 offset1">
   
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png"/>
    
</div>
</div>
<br><br>
<?php if(Yii::app()->user->isGuest){?>


<div class="hero-unit" align="center" style="font-family: 'Impact';">
<h2>Su pedido ha sido enviado.<br>Recibira noticias nuestras mediante email muy pronto.<br> ¡Un Saludo!</h2>
<h3>Gracias por confiar en nosotros</h3>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php }else{ ?>
<h1>Ver Pedido #<?php echo $model->id; ?></h1>

<?php  $this->widget('bootstrap.widgets.TbDetailView',array(
    'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'telefono',
		'email',
		'marca',
		'modelo',
		'fecha_fab',
		'bastidor',
		'combustible',
		'color',
		'piezas',
		'fecha',
		'estado',
	),
)); }?>
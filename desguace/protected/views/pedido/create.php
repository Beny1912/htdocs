<?php $this->pageTitle=Yii::app()->name . ' - Pedido piezas Desguace';?>
<?php


$this->menu=array(
	array('label'=>'Listar Pedido','url'=>array('index')),
	array('label'=>'Manejar Pedido','url'=>array('admin')),
);
?>

<div class="row">
   <div class="span8 offset1">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png"/>
    </div>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

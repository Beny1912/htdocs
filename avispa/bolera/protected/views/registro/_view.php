<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrada')); ?>:</b>
	<?php echo CHtml::encode($data->entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salida')); ?>:</b>
	<?php echo CHtml::encode($data->salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etiqueta')); ?>:</b>
	<?php echo CHtml::encode($data->etiqueta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifa')); ?>:</b>
	<?php echo CHtml::encode($data->tarifa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hoy')); ?>:</b>
	<?php echo CHtml::encode($data->hoy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alias_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->alias_grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_id')); ?>:</b>
	<?php echo CHtml::encode($data->grupo_id); ?>
	<br />

	*/ ?>

</div>
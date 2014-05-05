<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'registrosocio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        
        
                     

	 <?php $ahora=date("Y-m-d H:i:s");
   
        $grupo_id=$_GET['id'];
     
        ?>
        <?php echo $form->hiddenField($model,'entrada',array('value'=>$ahora,'type'=>'hidden')); ?>

<?php echo $form->dropDownListRow($model,'tiempo',array(''=>'Seleccione Tiempo','30'=>'30 minutos','60'=>'60 minutos','90'=>'90 minutos','120'=>'120 minutos','150'=>'150 minutos','180'=>'180 minutos','210'=>'210 minutos'), array('options' => array('Seleccione Tiempo'=>array('selected'=>true)))); ?>



	<?php /*echo $form->textFieldRow($model,'salida',array('class'=>'span5'));*/ ?>

	<?php echo $form->textFieldRow($model,'etiqueta',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'tarifa',array('class'=>'span5')); ?>
        
        <?php $hoy=date("Y-m-d"); ?>
        <?php echo $form->hiddenField($model,'hoy',array('value'=>$hoy,'type'=>'hidden')); ?>
	
	
        <?php echo $form->hiddenField($model,'grupo_id',array('value'=>$grupo_id,'type'=>'hidden')); ?>



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

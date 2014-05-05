<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'peques-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'apellidos',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'padres',array('class'=>'span5','maxlength'=>50)); ?>
        <br>

	<?php /* echo $form->textFieldRow($model,'cumpleanos',array('class'=>'span5')); */ ?>
        
        Cumpleaños:<br> 
            <?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'cumpleanos',
    'attribute'=>'cumpleanos',
      'model'=>$model,
    'options'=>array(
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'showButtonPanel'=>true,
        'dateFormat' => 'yy-mm-dd',
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'1990:2099',
        
        
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>
<?php $horaentrada = date("Y-m-d H:i:s"); ?>
	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'entrada',array('value'=>$horaentrada,'class'=>'span5')); ?>

            <?php echo $form->dropDownListRow($model,'tiempo',array('0'=>'Indefinido','30'=>'30','60'=>'60','90'=>'90','120'=>'120','150'=>'150','180'=>'180','210'=>'210'), array('options' => array('0'=>array('selected'=>true)))); ?>

	<?php /* echo $form->textFieldRow($model,'tiempo',array('class'=>'span5'));*/ ?>

	<?php echo $form->textFieldRow($model,'salida',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tarifa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

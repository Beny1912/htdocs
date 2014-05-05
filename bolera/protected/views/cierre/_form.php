<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cierre-form',
	'enableAjaxValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ), 
)); ?>
<?php $ahora=date("Y-m-d H:i:s"); ?>
	<p class="help-block">Los campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
        Fecha *
        
        <?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
    'name'=>'fecha',
  'attribute'=>'fecha',
    'language'=>'es',
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
         
    ),
    'htmlOptions'=>array(
        'required'=>'true',
        
    ),
));
?>
            <span id="error" style="font-family: Verdana, Arial, 
   Helvetica, sans-serif; font-size: 12pt;color: #CC3300;
  position:relative;visibility:hidden;">
Ya ha realizado un cierre para este dia!!
</span>
        
	

	 <?php echo $form->hiddenField($model,'hora',array('value'=>$ahora,'type'=>'hidden')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Cerrar Caja' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

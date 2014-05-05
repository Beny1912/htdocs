<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'gruposocio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'alias',array('class'=>'span5','maxlength'=>50)); ?>
        
        
        <?php 
        $memberFormConfig= array(
		  'elements'=>array(

			'numero_socio'=>array(
				'type'=>'dropdownlist',
				'items'=>  CHtml::listData(Socio::model()->findAll(), 'numero_socio', 'numero_socio'),
                            'prompt'=>'Seleccione Numero Socio...',
                            
			),

		  	
		));
        
        
        $this->widget('ext.multimodelform.MultiModelForm',array(
            'id'=>'id_socio',
            'formConfig'=>$memberFormConfig,
            'model'=>$socioG,
            'validatedItems'=>$validatedMembers,
            'data'=>$socioG->findAll('grupo_id=:grupo_Id',array(':grupo_Id'=>$model->id)),
              'addItemText'=>'Agregar + Socio',
             'removeText'=>'Borrar',
            
        ));
        ?>
        
        
        
        
        

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

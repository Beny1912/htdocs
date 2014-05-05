<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'grupo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'alias',array('class'=>'span5','maxlength'=>50)); ?>
        
        <?php 
        $memberFormConfig= array(
		  'elements'=>array(

			'nombre'=>array(
				'type'=>'text',
				'maxlength'=>50,
			),

		  	'apellido'=>array(
		  		'type'=>'text',
		  		'maxlength'=>50,
		  	),

			'cumple'=>array(
				'type'=>'zii.widgets.jui.CJuiDatePicker',
                'language'=>'es',
                'options'=>array(
                    'dateFormat' => 'yy-mm-dd',
                    'showAnim'=>'fold',
                    'changeMonth'=>true,
        'changeYear'=>true,
                    'yearRange'=>'1990:2099',
                    
                ),
			),
                        'padres'=>array(
                                'type'=>'text',
                                'maxlength'=>50,
                            
                            
                        ),
                        'telefono'=>array(
                            'type'=>'text',
                            'maxlength'=>9,
                        ),
                      
		));
        
        
        $this->widget('ext.multimodelform.MultiModelForm',array(
            'id'=>'id_chico',
            'formConfig'=>$memberFormConfig,
            'model'=>$chico,
            'validatedItems'=>$validatedMembers,
            'data'=>$chico->findAll('grupo_id=:grupo_Id',array(':grupo_Id'=>$model->id)),
            'addItemText'=>'Agregar + chico',
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

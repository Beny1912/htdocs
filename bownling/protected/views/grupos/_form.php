<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'grupos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
        
        <?php
        $modelos="Grupos,Chicos";
        $this->widget (
        'ext.clonnableFields.ClonnableFields',
        array (
           // 'models'=>$modelos, //required, one to many model relation or array
            'rowGroupName'=>'Mayors', //required, all fields will be with this key number
            'startRows'=>1, //optional, default: 1 - The number of rows at widget start
            'labelsMode'=>2, //optional, default: 1 - (0 - never, 1 - always, 2 - only if rows exist)
            'addButtonLabel' => '<i class="icon-plus"></i> Add person to list', //optionall, default: "Add"
            'removeButtonLabel' => '<i class="icon-remove"></i>', //optional, default: "Remove"
            'removeButtonHtmlOptions' => array('class'=>'pull-right'), //optional
            'fields'=>array( //required
                //---------first field------------------------
                array(
                    'label'=>array( //optional
                        'title'=>'#',
                    ),
                    'field'=>array(
                        'class'=>'TemplateAutonumerationField', //required
                        'attribute'=>'id', //required, model attribute or field name
                        'params'=>array( //optional, default: '{num}'
                            'template'=>'Row {num}',
                        ),
                        'htmlOptions'=>array('class'=>'span1'), //optional - field options
                    ),
                    'fieldHtmlOptions' => array('class'=>'span1'), //optional - field block options
                ),
                //////campo nombre
                array(
                    'label'=>array(
                        'title'=>'Nombre',
                        'htmlOptions'=>array('data-toggle' => 'popover', 'data-content' => 'Introduce nombre', 'data-trigger' => 'hover', 'data-placement' => 'top'),
                    ),
                    'field'=>array(
                        'class'=>'TemplateTextField',
                        'attribute'=>'nombre', //required, model attribute or field name
                        'htmlOptions'=>array('class'=>'span1', 'maxlength'=>'50'),
                    ),
                    'fieldHtmlOptions' => array('class'=>'span1'),
                ),
               /////////campo apellidos
                array(
                    'label'=>array(
                        'title'=>'Apellidos',
                        'htmlOptions'=>array('data-toggle' => 'popover', 'data-content' => 'Introduce Apellidos', 'data-trigger' => 'hover', 'data-placement' => 'top'),
                    ),
                    'field'=>array(
                        'class'=>'TemplateTextField',
                        'attribute'=>'apellidos', //required, model attribute or field name
                        'htmlOptions'=>array('class'=>'span1', 'maxlength'=>'50'),
                    ),
                    'fieldHtmlOptions' => array('class'=>'span1'),
                ),
                ////campo cumple
                array(
                    'label'=>array(
                        'title'=>'Fecha Nac',
                        'htmlOptions'=>array('data-toggle' => 'popover', 'data-content' => 'Introduce Fecha Nacimiento', 'data-trigger' => 'hover', 'data-placement' => 'top'),
                    ),
                    'field'=>array(
                        'class'=>'TemplateTextField',
                        'attribute'=>'fecha', //required, model attribute or field name
                        'htmlOptions'=>array('class'=>'span1', 'maxlength'=>'50'),
                    ),
                    'fieldHtmlOptions' => array('class'=>'span1'),
                ),
               /////////////////campo padres
                
                array(
                    'label'=>array(
                        'title'=>'Padres',
                        'htmlOptions'=>array('data-toggle' => 'popover', 'data-content' => 'Introduce Padres', 'data-trigger' => 'hover', 'data-placement' => 'top'),
                    ),
                    'field'=>array(
                        'class'=>'TemplateTextField',
                        'attribute'=>'padres', //required, model attribute or field name
                        'htmlOptions'=>array('class'=>'span1', 'maxlength'=>'50'),
                    ),
                    'fieldHtmlOptions' => array('class'=>'span1'),
                ),
                
                ///////////////////campo telefono
               array(
                    'label'=>array(
                        'title'=>'Telefono',
                        'htmlOptions'=>array('data-toggle' => 'popover',  'data-content' => 'Introduce telefono', 'data-trigger' => 'hover', 'data-placement' => 'top'),
                    ),
                    'field'=>array(
                        'class'=>'TemplateTextField',
                        'attribute'=>'telefono', //required, model attribute or field name
                        'htmlOptions'=>array('class'=>'span1', 'maxlength'=>'50'),
                    ),
                    'fieldHtmlOptions' => array('class'=>'span1'),
                ),
            ),
        )
    );    
        
        ?>
       

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'alias',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'entrada',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tiempo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'salida',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

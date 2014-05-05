<div class="text-center">
<h1><?php echo CrugeTranslator::t('logon',"Login"); ?></h1>
<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>
<?php else: ?>
<div class="form">
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'logon-form',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
    
    <?php echo $form->checkboxRow($model, 'rememberMe'); ?>
    
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Iniciar Sesión')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array( 'label'=>'Registrarse','url' => '#')); ?>
 



	<div class="col">
		<?php //Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Login")); ?>
		<?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
		<?php
			//if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
			//	echo Yii::app()->user->ui->registrationLink;
		?>
	</div>
</div>
	<?php
		//	si el componente CrugeConnector existe lo usa:
		//
		if(Yii::app()->getComponent('crugeconnector') != null){
		if(Yii::app()->crugeconnector->hasEnabledClients){ 
	?>
	<div class='crugeconnector'>
		<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
		<ul>
		<?php 
			$cc = Yii::app()->crugeconnector;
			foreach($cc->enabledClients as $key=>$config){
				$image = CHtml::image($cc->getClientDefaultImage($key));
				echo "<li>".CHtml::link($image,
					$cc->getClientLoginUrl($key))."</li>";
			}
		?>
		</ul>
	</div>
	<?php }} ?>
	

<?php $this->endWidget(); ?>
</div>
<?php endif; ?>


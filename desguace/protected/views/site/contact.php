<style>
   
    fieldset.scheduler-border {
    color: #5DABCD;
    background-color: #EAEAEA;
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
            -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;
          
}

</style>
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';

?>
<div class="row">
<div class="span8 offset1">
   
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png"/>
</div>    
</div>
<div class="row span9 offset1" style="font-size:14pt;font-family: 'Impact';">
<ul>
<li><p>Si eres un <font color="#5DABCD">Desguace no asociado</font> y quieres unirte a nuestra red de desguaces concertados, rellena y envía el formulario que aparece en el margen izquierdo de la página web y en breve te nos pondremos en contacto.</p></li> 
<li><p>Si eres un <font color="#5DABCD">Cliente</font> y necesitas ayuda rellena el formulario y te responderemos los antes posible.</p></li>
</ul>
</div>
<br><br>
<div class ="row">
<br><br><br><br><br>
<div class="span10 offset2">
<div class="row">
<div class="span4">
  <fieldset class="scheduler-border">
<h1><font color="#5DABCD">Contacto</font></h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
<br>
	<?php echo $form->errorSummary($model); ?>

	
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>


	
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	

	
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	

		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	

	<?php if(CCaptcha::checkRequirements()): ?>
	
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		
		<?php echo $form->error($model,'verifyCode'); ?>
	
	<?php endif; ?>
<br>
	<button type="submit" class="btn btn-primary">Enviar</button>
		<?php /*echo CHtml::submitButton('Enviar'); */?>


<?php $this->endWidget(); ?>

</div><!-- form -->
</fieldset>
</div>
<div class="span6">
<br>
<div align="center">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Feldesguacedelared&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
</div>
<br>
<div align="center">
<a class="twitter-timeline" href="https://twitter.com/DesguacedelaRed" data-widget-id="446371156665192448">Tweets por @DesguacedelaRed</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<br>
</div>
</div>
<?php endif; ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>
</div>
</div>
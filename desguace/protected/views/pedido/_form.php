
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
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'pedido-form',
	'enableAjaxValidation'=>false,
)); ?>
<br>


<div class="row">
<div class="text-center">

</div>
</div>
<br>
 <div class="row">
      
     
     <div class="span5 offset1" >
   
        <fieldset class="scheduler-border">
        
        <h3>Datos Personales</h3>
   
	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
        
     
	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Introduzca su nombre')); ?>
        
        <?php echo $form->textFieldRow($model,'apellidos',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Introduzca su apellido')); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>9,'minlength'=>9,'placeholder'=>'Introduzca su telefono')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Introduzca su email')); ?>


</fieldset>
                
                <!--//////////////////////////////////////////////////////NUEVO -->
                
             <fieldset class="scheduler-border">
                    <h3>Datos de Envio</h3>
                    
                    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>
                    
                    <?php echo $form->textFieldRow($model,'direccion',array('class'=>'span5','maxlength'=>255,'placeholder'=>'Introduzca su direccion')); ?>
                    
                  
                     <?php echo $form->textFieldRow($model,'cp',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Codigo Postal')); ?>
                    
                    
                    <?php echo $form->textFieldRow($model, 'ciudad',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Introduzca Ciudad')); ?>
                    
                   
                    <?php echo $form->hiddenField($model, 'provincia',array('type'=>'hidden')); ?>
                    
                    <?php echo $form->labelEx($model,'provincia'); ?>
                    <?php echo $form->dropDownList($model,'provincia',CHtml::listData(PsState::model()->findAll('id_country=6'), 'id_state', 'name'),array ('prompt'=>  'Seleccione...'));?>
                    <?php echo $form->error($model,'provincia'); ?>
                   
                                       
                    
                </fieldset>        
                <!--  //////////////////////////////////////// -->
                
<fieldset class="scheduler-border">
	
<h3>Modelo de Coche</h3>
<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>
	
    <?php //echo $form->textFieldRow($model,'marca',array('class'=>'span5','maxlength'=>50)); ?>
        <?php echo $form->dropDownListRow($model,'marca',array('Acura'=>'Acura','Alfa Romeo'=>'Alfa Romeo','AMC'=>'AMC','Aston Martin'=>'Aston Martin','Audi'=>'Audi','Avanti'=>'Avanti','Autovaz'=>'Autovaz','Bentley'=>'Bentley','Bmw'=>'Bmw','Buick'=>'Buick','Cadillac'=>'Cadillac','Caterham'=>'Caterham','Chevrolet'=>'Chevrolet','Chrysler'=>'Chrysler','Citroen'=>'Citroen','Dacia'=>'Dacia','Daihatsu'=>'Daihatsu','DeLorean'=>'DeLorean','Dodge'=>'Dodge','Eagle'=>'Eagle','Ferrari'=>'Ferrari','Fiat'=>'Fiat','Fisker'=>'Fisker','Ford'=>'Ford','Freightliner'=>'Freightliner','Geo'=>'Geo','GMC'=>'GMC','Honda'=>'Honda','Hummer'=>'Hummer','Hyundai'=>'Hyundai','Infinity'=>'Infinity','Isuzu'=>'Isuzu','Jaguar'=>'Jaguar','Jeep'=>'Jeep','Kia'=>'Kia','Lamborghini'=>'Lamborghini','Lancia'=>'Lancia','Land Rover'=>'Land Rover','Lexus'=>'Lexus','Lincoln'=>'Lincoln','Lotus'=>'Lotus','Maserati'=>'Maserati','Maybach'=>'Maybach','Mazda'=>'Mazda','McLaren'=>'McLaren','Mercedez Benz'=>'Mercedez Benz','Mercury'=>'Mercury','Merkur'=>'Merkur','MG'=>'MG','Mini'=>'Mini','Mitsubishi'=>'Mitsubishi','Morgan'=>'Morgan','Nissan'=>'Nissan','Oldsmobile'=>'Oldsmobile','Opel'=>'Opel','Peugeot'=>'Peugeot','Plymouth'=>'Plymouth','Pontiac'=>'Pontiac','Porsche'=>'Porsche','RAM'=>'RAM','Renault'=>'Renault','Rolls Royce'=>'Rolls Royce','Rover'=>'Rover','Saab'=>'Saab','Saturn'=>'Saturn','Scion'=>'Scion','Seat'=>'Seat','Skoda'=>'Skoda','Smart'=>'Smart','SRT'=>'SRT','Ssangyong'=>'Ssangyong','Sterling'=>'Sterling','Subaru'=>'Subaru','Suzuki'=>'Suzuki','Tata'=>'Tata','Tesla'=>'Tesla','Toyota'=>'Toyota','Triumph'=>'Triumph','Volkswagen'=>'Volkswagen','Volvo'=>'Volvo','Yugo'=>'Yugo'), array('options' => array('Acura'=>array('selected'=>true)))); ?>

    
    <?php echo $form->textFieldRow($model,'modelo',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Introduzca modelo (Ej. Megane Sedan 2.0 TDI)')); ?>


	<?php echo $form->textFieldRow($model,'fecha_fab',array('class'=>'span5','maxlength'=>4,'minlength'=>4,'placeholder'=>'Introduzca fecha de fabricacion (Ej. 2012)')); ?>

	<?php echo $form->textFieldRow($model,'bastidor',array('class'=>'span5','maxlength'=>17,'placeholder'=>'Introduzca bastidor (Ej. VW123456789BTYU)')); ?>

	
<?php echo $form->dropDownListRow($model,'combustible',array('Combustible'=>'Combustible','Gasolina'=>'Gasolina','Diesel'=>'Diesel','Biodiesel'=>'Biodiesel','Hibrido'=>'Hibrido'), array('options' => array('Combustible'=>array('selected'=>true)))); ?>

	<?php /*echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>25,'placeholder'=>'Introduzca color(Ej. Azul)'));*/ ?>

	<?php echo $form->textAreaRow($model,'piezas',array('class'=>'span5','maxlength'=>255,'rows'=>5,'placeholder'=>'Introduzca piezas que busca(Ej. Bomba de agua, Parachoques delantero,etc... )')); ?>
<br>

<input type="checkbox"  required="" checked /> Acepto las <a href="#myModal"  data-toggle="modal">Condiciones de Uso</a>

<br>
	<?php /*echo $form->textFieldRow($model,'fecha',array('class'=>'span5'));*/ ?>
   
        <?php $fecha = date("Y-m-d H:i:s"); ?>
<?php echo $form->hiddenField($model,'fecha',array('value'=>$fecha,'type'=>'hidden')); ?>
   

	<?php echo $form->hiddenField($model,'estado',array('class'=>'span5','maxlength'=>13,'value'=>'enviado')); ?>

	<br>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Enviar' : 'Guardar',
		)); ?>
        



<?php $this->endWidget(); ?>

</fieldset>
</div>

      <div class="span4 offset1" style="font-family: 'Impact';">
                
            <br><br><br><br>
            <h2 class="text-center">RELLENE EL FORMULARIO ES FACIL Y SENCILLO</h2>
            <br><br>
            <p class="text-center" style="font-size:20px"><font color="#5DABCD">No pierdas tu tiempo buscando</font> las piezas que necesitas, el desguace de la red lo hace por ti.</p>
<br>
<div align="center">
    <img width="50px" height="50px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/lupamini.png"/>
</div>
<br>
<p class="text-center" style="font-size:20px"><font color="#5DABCD">La búsqueda</font> será mas efectiva cuanta mas información nos proporciones</p>
<br>
<div align="center">
    <img width="50px" height="50px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/lupamini.png"/>
</div>

<br>
<p class="text-center" style="font-size:20px"><font color="#5DABCD">Rellena el formulario</font> y en breve recibiras nuestra respuesta por email.</p>
<br>

<div align="center">
    <img width="50px" height="50px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/lupamini.png"/>
</div>
<br>
<p class="text-center" style="font-size:20px"><font color="#5DABCD">Escoge la mejor opción</font> y te mando tu pieza donde quieras</p>
<br><br>
<div align="center">
    <img width="500px" height="500px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/piezas.png"/>
</div>
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
        </div>



<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Condiciones de Uso</h3>
  </div>
  <div class="modal-body">
    <p>Usted acepta la creacion de un Usuario en nuestra web con contraseña autogenerada para facilitarle el proximo paso. Realizamos una busqueda de sus piezas y le enviamos un enlace que contiene los productos que le sugerimos, su estado gracias a la muestra de imagenes, y el precio con gastos de envios. A partir de ahi usted puede elegir el o los productos que mas le gusten o convengan y pasar por una pasarela de pago para realizar el pago. Despues nosotros nos haremos cargo de enviarle este producto a la direccion de envio introducida en el momento de la creacion de este formulario o si lo desea puede cambiar la direccion de entrega en el momento del pago.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">OK</button>
  </div>
</div>
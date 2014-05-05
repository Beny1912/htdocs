<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/js/sortable/css/sortable-theme-bootstrap.css" />
<script src="<?php echo Yii::app()->baseUrl; ?>/js/sortable/js/sortable.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

    
    <script>
    function cargar()
{
     jQuery("#cont").load('+<?php echo Yii::app()->createUrl("site/buscarsalida"); ?>+');
}
    setInterval(cargar,1000);
</script>
<script>
    function js_yyyy_mm_dd_hh_mm_ss () {
  now = new Date();
  year = "" + now.getFullYear();
  month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
  day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
  hour = "" + now.getHours(); if (hour.length == 1) { hour = "0" + hour; }
  minute = "" + now.getMinutes(); if (minute.length == 1) { minute = "0" + minute; }
  second = "" + now.getSeconds(); if (second.length == 1) { second = "0" + second; }
  return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
}
    
    
    
    
</script>
<script type="text/javascript">
	function play_single_sound() {
		document.getElementById('audiotag1').play();
	}
</script>
<script>
    function buscar(){
    var time= js_yyyy_mm_dd_hh_mm_ss();
    
        
        var data = Array();
        $("#buscar tr").each(function(i, v){
    data[i] = Array();
    $(this).children('td').each(function(ii, vv){
        data[i][ii] = $(this).text();
         
    }); 
    if(data[i][2]==time){
            play_single_sound();
window.alert("El siguiente grupo ha terminado su tiempo: " + data[i][0]);
window.location.href="http://localhost:8888/bolera/index.php?r=grupo/view&id="+data[i][0]+"";
}
   
})
    }
    setInterval(buscar,1000);
    
    function buscarSocio(){
        
        var time= js_yyyy_mm_dd_hh_mm_ss();
    
        
        var data = Array();
        $("#sh tr").each(function(i, v){
    data[i] = Array();
    $(this).children('td').each(function(ii, vv){
        data[i][ii] = $(this).text();
         
    }); 
    if(data[i][2]==time){
            play_single_sound();
alert("El siguiente grupo de socios ha terminado su tiempo: " + data[i][0]);
window.location.href="http://localhost:8888/bolera/index.php?r=gruposocio/view&id="+data[i][0]+"";
}
   
})
    }
    setInterval(buscarSocio,1000);
    
    
    
</script>

    
    
    
    
<body>
  
            
<audio id="audiotag1" src="<?php echo Yii::app()->baseUrl;?>/audio/alerta.mp3" preload="auto"></audio>
<div id="cont">
              
              
          </div>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Niños y Grupos', 'url'=>'#', 'items'=>array(
                    array('label'=>'Agregar Grupo o Chico', 'url'=>array('grupo/create')),
                    array('label'=>'Administrar grupos', 'url'=>array('grupo/admin')),
                    array('label'=>'Administrar Chicos', 'url'=>array('chico/admin')),
                                    )),
              
                
                array('label'=>'Socios', 'url'=>'#', 'items'=>array(
                        array('label'=>'Agregar Socio', 'url'=>array('socio/create')),
                        array('label'=>'Agregar Grupo de Socios', 'url'=>array('gruposocio/create')),
                        array('label'=>'Admin Socios', 'url'=>array('socio/admin')),
                        array('label'=>'Admin Grupos de Socios', 'url'=>array('gruposocio/admin')),
                    
                        )),
               
                
                
                
              
              
                array('label'=>'Mostrar','url'=>'#','items'=>array(array('label'=>'Mostrar', 'url'=>array('/site/mostrar')),array('label'=>'Chicos dentro', 'url'=>array('/site/chicosdentro')))), 
                array('label'=>'Reservas','url'=>'#','items'=>array(
                    array('label'=>'Crear Reserva','url'=>array('reservas/create')),
                    array('label'=>'Administrar Reservas','url'=>array('reservas/admin')),
                         array('label'=>'Reservas de Hoy','url'=>array('/site/hoy')),
                )),
               
                 array('label'=>'Cierre', 'url'=>array('cierre/create')),
                 array('label'=>'Contabilidad', 'url'=>array('/site/contabilidad'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
              
                
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
       
	<div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> Desarrollado por <a href="http://benyapps.com" target="_blank">BenyApps</a><br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

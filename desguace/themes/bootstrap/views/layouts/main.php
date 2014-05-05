<!DOCTYPE html>
 
<html lang="<?php echo Yii::app()->language;?>">
 
<head>
 
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
 
 <meta charset="<?php echo Yii::app()->charset;?>">
 <?php echo Yii::app()->bootstrap->register(); ?>
 
 <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel='stylesheet' type='text/css'>
 <!--fontawesome-->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<!-- Custom styles -->

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'>
  
    <style>
       body{
           background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/shattered.png);
               // background-color: #D2D1D7;
                
            }
            .container{
                background-color: white;
               
            }
    </style>
    


</head>
 
<body>




<header>
<?php
/*$this->widget('bootstrap.widgets.TbNavbar', array(
	'type'=>'inverse', // null or 'inverse'
	'brand'=>'Desguace Net',
	'brandUrl'=>'index.php?r=site/index',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'NAV HEADER'),
					array('label'=>'Separated link', 'url'=>'#'),
					array('label'=>'One more separated link', 'url'=>'#'),
				)),
			),
		),
		'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Link', 'url'=>'#'),
				'---',
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
	),
));*/




$this->widget('bootstrap.widgets.TbNavbar', array(
	'type'=>'null', // null or 'inverse'
	'brand'=>'Desguace de la Red',
	'brandUrl'=>'index.php?r=pedido/create',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('icon'=>'home','label'=>'Home', 'url'=>array('/pedido/create')),
                            
    			array('icon'=>'user','label'=>'Sobre Nosotros', 'url'=>array('/site/page', 'view'=>'about')),
				array('icon'=>'envelope','label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Administrar Usuarios'
					, /*'url'=>Yii::app()->user->ui->userManagementAdminUrl*/
                                    'url'=> '#', 
                                    'items' =>array(
                                        
                                        array('label'=>'ADMINISTRACION'),
                                        array('label'=>'Administrar Pedidos','url'=>'index.php?r=pedido/admin&Pedido_sort=id.desc'),
                                        array('label'=>'Administrar Desguaces','url'=>'index.php?r=desguace/admin'),
                                        array('label'=>'Crear Nuevo Desguace','url'=>'index.php?r=desguace/create'),
                                       
                                        '---',
                                        
                                       
					array('label'=>'ADMINISTRACION'),
                                        array('label'=>'Administrar Usuarios','url'=>Yii::app()->user->ui->userManagementAdminUrl),
                                        array('label'=>'Editar Perfil','url'=>'index.php?r=cruge/ui/editprofile'),
                                        array('label'=>'Crear Usuario','url'=>'index.php?r=cruge/ui/usermanagementcreate'),
                                        '---',
					array('label'=>'CAMPOS PERSONALIZADOS'),
                                        array('label'=>'Listar Campos de Perfil','url'=>'index.php?r=cruge/ui/fieldsadminlist'),
                                        array('label'=>'Crear Campos de Perfil','url'=>'index.php?r=cruge/ui/fieldsadmincreate'),
                                        '---',
					array('label'=>'ROLES y ASIGNACIONES'),
                                        array('label'=>'Roles','url'=>'index.php?r=cruge/ui/rbaclistroles'),
                                        array('label'=>'Tareas','url'=>'index.php?r=cruge/ui/rbaclisttasks'),
                                        array('label'=>'Operaciones','url'=>'index.php?r=cruge/ui/rbaclistops'),
                                        array('label'=>'Asignar Roles a Usuarios','url'=>'index.php?r=cruge/ui/rbacusersassignments'),
                                        '---',
					array('label'=>'SISTEMA'),
                                        array('label'=>'Sesiones','url'=>'index.php?r=cruge/ui/sessionadmin'),
                                        array('label'=>'Variables del Sistema','url'=>'index.php?r=cruge/ui/systemupdate'))
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				
			),
		),
		
		/*array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Link', 'url'=>'#'),
				'---',
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'index.php?r=cruge/ui/editprofile'),
				)),
			),
		),*/
	),
));


/*
$this->widget('bootstrap.widgets.TbNavbar', array(
 'type'=>'inverse', // null or 'inverse'
 'brand'=>CHtml::encode(Yii::app()->name),
 'brandUrl'=>array('/site/index'),
 'collapse'=>true, // requires bootstrap-responsive.css
 'items'=>array(
 array(
 'class'=>'bootstrap.widgets.TbMenu',
 'items'=>array(
 array('label'=>'Aviso Legal', 'url'=>array('/site/page', 'view'=>'disclaimer')),
 array('label'=>'Contáctenos', 'url'=>array('/site/contact')),
 array('label'=>'FAQs' , 'url'=>array('/faqs/index'), 'visible'=>!Yii::app()->user->isGuest),
 ),
 ),
 array(
 'class'=>'bootstrap.widgets.TbMenu',
 'htmlOptions'=>array('class'=>'pull-right'),
 'items'=>array(
 array('label'=>'Iniciar sesión'
 , 'url'=>Yii::app()->user->ui->loginUrl
 , 'visible'=>Yii::app()->user->isGuest),
 array('label'=>Yii::app()->user->name,
 'url'=>array('/cruge/ui/editprofile/'),
 'visible'=>!Yii::app()->user->isGuest),
 array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')'
 , 'url'=>Yii::app()->user->ui->logoutUrl
 , 'visible'=>!Yii::app()->user->isGuest),
 // array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'))
 ),
 ),
 ),
));*/
?>
 

</header>
   
<div class="container" id="main">
 <?php if(isset($this->breadcrumbs)):?>
 <?php $this->widget('ext.bootstrap.widgets.TbBreadcrumbs', array(
 'links'=>$this->breadcrumbs,
 )); ?>
 <?php endif?>
    <?php if(Yii::app()->user->isGuest){?>
    
    
    
    <div class="text-right">
Siguenos:
<a href="http://twitter.com/DesguacedelaRed" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span></a>
<a href="http://facebook.com/eldesguacedelared" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span></a>
<a href="#" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
</span></a>
<a href="#" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
</span></a>
</div>
    <!--
    <div align="rigth">
   
       <a href="https://www.facebook.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Facebook.png"/></a><a href="http://www.twitter.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Twitter.png"/></a><a href="http://www.gmail.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Mail.png"/></a><a href="https://www.plus.google.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Google+.png"/></a><a href="http://www.youtube.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Youtube.png"/></a>
    </div>-->
    <?php }?>
 <?php echo $content; ?>
  

 <footer class="text-center">
 Copyright &copy; <?php echo date('Y'); ?> <?php echo CHtml::encode(Yii::app()->params['empresa']); ?> | <?php echo CHtml::encode((Yii::app()->name).' '.Yii::app()->params['version']); ?> - Todos los Derechos reservados.<br/>
 <?php echo Yii::powered(); ?><br>
 Desarrollo creado por <a href="http://benyapps.com" >BenyApps</a>
 </footer>
 
 

            
            
         
</div>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilock.css" rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/scriptck.js"></script>
    		    <div class="cookieDiv">
			        <div class="textoCookie">
			            <p> Nuestra web utiliza cookies para proporcionar una mejor experiencia de cara al usuario. Si estás de acuerdo con ello solamente haz click en el botón aceptar a continuación y se ocultará este espacio, si quieres saber más haz click en el enlace 'Más información'.</p>
			        </div>
			        <div class="accionCookie">
			            <a href="#" class="botonCookie">Aceptar</a>
			            <a href="#" class="enlaceCookie">Más información</a>
			        </div>
			    </div>
			<!-- finaliza el contenedor a mostrar -->
            
     <script src="http://app.cookieassistant.com/widget.js?token=T1R-4e2bB-wuU-gF-GK5Pg" type="text/javascript"></script>
<div id="cookie_assistant_container"></div>
<!-- End Cookie Assistant -->

</body>
</html>
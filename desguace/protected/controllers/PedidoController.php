<?php
//Yii:import('applications.models.Desguace');
Yii::app()->getModule('Desguace');


class PedidoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
    {
		$model=new Pedido;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pedido']))
		{
			$model->attributes=$_POST['Pedido'];
			if($model->save()){
/*cambiar pagina de rredireccion*/	
                        
                       
                      $desde= "admin@eldesguacedelared.com";
                        $adminemail=Yii::app()->params['adminEmail'];
                        //////////////////////////////ENVIO DE EMAILS///////////////////////////////////////////////
                       $name="El Desguace de la red";
                        $marca=$model->marca;
                        $modelo=$model->modelo;
                        $fechaF=$model->fecha_fab;
                        $bastidor=$model->bastidor;
                        $combustible=$model->combustible;
                        $color=$model->color;
                        $piezas=$model->piezas;
                        
                        
                        $headers="From: $name <{$adminemail}>\r\n".
    				"Reply-To: {$desde}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/html; charset=UTF-8";
					
					
                            
                        $asunto='Pedido de Piezas desde el Desguacedelared.com';
                        
$body='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">
       <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Mensaje desde El Desguace de la Red</title>
		

		<style>	@media only screen and (max-width: 300px){ 
				body {
					width:218px !important;
					margin:auto !important;
				}
				.table {width:195px !important;margin:auto !important;}
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}		
				span.title{font-size:20px !important;line-height: 23px !important}
				span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}		
				td.box p{font-size: 12px !important;font-weight: bold !important;}
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 200px!important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
	@media only screen and (min-width: 301px) and (max-width: 500px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}	
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 293px !important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}
				
			}
	@media only screen and (min-width: 501px) and (max-width: 768px) {
				body {width:478px!important;margin:auto!important;}
				.table {width:450px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}			
			}
	@media only screen and (max-device-width: 480px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
				
				.table-recap{width: 285px!important;}
				.table-recap tr td, .conf_body td{text-align:center!important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
</style>

	</head>
	<body style="-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
		<table class="table table-mail" style="width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)">
			<tr>
				<td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
				<td align="center" style="padding:7px 0">
					<table class="table" bgcolor="#ffffff" style="width:100%">
						<tr>
							<td align="center" class="logo" style="border-bottom:4px solid #333333;padding:7px 0">
								<a title="El Desguace de la red" href="http://tienda.eldesguacedelared.com" style="color:#337ff1">
									<img src="http://eldesguacedelared.com/img/logo200.png" alt="El Desguace de la Red" />
								</a>
							</td>
						</tr>

<tr>
	<td align="center" class="titleblock" style="padding:7px 0">
		<font size="2" face="Open-sans, sans-serif" color="#555454">
			<span class="title" style="font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px">Hola,</span><br/>
			<span class="subtitle" style="font-weight:500;font-size:16px;text-transform:uppercase;line-height:25px">Nos ponemos en contacto con vosotros para la peticion de piezas</span>
		</font>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
		<table class="table" style="width:100%">
			<tr>
				<td width="10" style="padding:7px 0">&nbsp;</td>
				<td style="padding:7px 0">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<p data-html-only="1" style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">
							Pedido desde El desguace de la red						</p>
						<span style="color:#777">
							Detalles:<br /> 
							<span style="color:#333"><strong>Piezas y Observaciones : </strong></span>'.$piezas.'<br />
                            <span style="color:#333"><strong>Marca: </strong></span>'.$marca.'<br />
                            <span style="color:#333"><strong>Modelo: </strong></span>'.$modelo.'<br />
                            <span style="color:#333"><strong>Fecha de Fabricacion: </strong></span>'.$fechaF.'<br />
                            <span style="color:#333"><strong>Bastidor: </strong></span>'.$bastidor.'<br />
                            <span style="color:#333"><strong>Combustible: </strong></span>'.$combustible.'
                           
						</span>
					</font>
				</td>
				<td width="10" style="padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
		<table class="table" style="width:100%">
			<tr>
				<td width="10" style="padding:7px 0">&nbsp;</td>
				<td style="padding:7px 0">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<p style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">Consejos:</p>
						<ol style="margin-bottom:0">
							<li>Contacte con nosotros lo antes posible</li>
							<li>Adjunte fotos de las piezas para que al cliente le quede claro el estado de las mismas.</li>
						
						</ol>
					</font>
				</td>
				<td width="10" style="padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="linkbelow" style="padding:7px 0">
		<font size="2" face="Open-sans, sans-serif" color="#555454">
			<span>Juan Fernandez - CEO de <a href="http://eldesguacedelared.com" style="color:#337ff1">El Desguace de la Red</a></span>
		</font>
	</td>
</tr>

						<tr>
							<td class="space_footer" style="padding:0!important">&nbsp;</td>
						</tr>
						<tr>
							<td class="footer" style="border-top:4px solid #333333;padding:7px 0">
								<span><a href="http://eldesguacedelared.com" style="color:#337ff1">El Desguace de la red</a> Desarrollado creado por <a href="http://www.benyapps.com" style="color:#337ff1">Benyapps&trade;</a></span>
							</td>
						</tr>
					</table>
				</td>
				<td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</body>
</html>';









     /////////////ENVIO EMAILS DESGUACES             
$models=  Desguace::model()->findAll();
if($models){
foreach ($models as $em) {
    
    mail($em->email,$asunto,$body,$headers); 
    
}
}         

////////////////////////////////////TRIGGER ///////////////////////////////////////  
//
//
$link = mysqli_connect("juanDesguace.db.11252623.hostedresource.com", "juanDesguace", "Polencito1!", "juanDesguace");  
//////////////pasword generado
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<8;$i++) {
$cad .= substr($str,rand(0,62),1);
}

/////concatenar cookie key y transformar a md5
$cookiekey="jYI1XwMsZtPyP8k2N0IhZMDaO9FgcJmBqOZhguzmBC5iVEHu881wLJCF";

$cookiekey.=$cad;

 $passAuto=md5($cookiekey);
$email=$model->email;
$nombre=$model->nombre;
$apellidos=$model->apellidos;
$ahora=date('Y-m-d H:i:s');
$active=1;
$is_guest=0;
$securekey=md5(uniqid(rand(), true));
$max_payments=0;
$id_lang=1;
$id_default_group=3;
$id_risk=0;
$id_country=6;
$id_state=$model->provincia;
$direccion=$model->direccion;
$postcode=$model->cp;
$city=$model->ciudad;
$phone=$model->telefono;
$alias="Casa";

            //////////////////////////////////////////FIN DECLARACION VARIABLES
////busca si el email esta en bd

$sql="SELECT COUNT(*) AS esta FROM ps_customer WHERE email='$email'";
$result=mysqli_query($link,$sql);

$data=mysqli_fetch_assoc($result);

////si no esta introducir en tabla clientes
if($data['esta']==0){

    $sql1="INSERT INTO ps_customer(id_lang,id_default_group,id_risk,firstname,lastname,email,passwd,active,is_guest,date_add,date_upd,last_passwd_gen,secure_key,max_payment_days) VALUES('$id_lang','$id_default_group','$id_risk','$nombre','$apellidos','$email','$passAuto','$active','$is_guest','$ahora','$ahora','$ahora','$securekey','$max_payments')";
	$result1=mysqli_query($link,$sql1);
        
        
        ////despues de insertar datos personales insertar datos de la direccion


///////////////primero buscar id del cliente
	$sql3="SELECT id_customer FROM ps_customer WHERE email='$email'";
	$result3=mysqli_query($link,$sql3);
	$id_cl_array=mysqli_fetch_assoc($result3);
	$idcliente=$id_cl_array['id_customer'];


////////////ahora insertar


	$sql2="INSERT INTO ps_address (id_country,id_state,id_customer,alias,lastname,firstname,address1,postcode,phone,city,date_add,date_upd,active) VALUES('$id_country','$id_state','$idcliente','$alias','$apellidos','$nombre','$direccion','$postcode','$phone','$city','$ahora','$ahora','$active')";
	$result2=mysqli_query($link,$sql2);
        
                 /////////////ahora insertar grupos pertenece

	$sql4="INSERT INTO ps_customer_group(id_customer,id_group) VALUES('$idcliente',1)";
	$result4=mysqli_query($link,$sql4);
        
        $sql5="INSERT INTO ps_customer_group(id_customer,id_group) VALUES('$idcliente',2)";
	$result5=mysqli_query($link,$sql5);
        
        $sql6="INSERT INTO ps_customer_group(id_customer,id_group) VALUES('$idcliente',3)";
	$result6=mysqli_query($link,$sql6);
                      

////////////////////CORREO CLIENTE
   $correoweb='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">
       <html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Mensaje desde El Desguace de la Red</title>
		

		<style>	@media only screen and (max-width: 300px){ 
				body {
					width:218px !important;
					margin:auto !important;
				}
				.table {width:195px !important;margin:auto !important;}
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}		
				span.title{font-size:20px !important;line-height: 23px !important}
				span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}		
				td.box p{font-size: 12px !important;font-weight: bold !important;}
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 200px!important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
	@media only screen and (min-width: 301px) and (max-width: 500px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}	
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 293px !important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}
				
			}
	@media only screen and (min-width: 501px) and (max-width: 768px) {
				body {width:478px!important;margin:auto!important;}
				.table {width:450px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}			
			}
	@media only screen and (max-device-width: 480px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
				
				.table-recap{width: 285px!important;}
				.table-recap tr td, .conf_body td{text-align:center!important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
</style>

	</head>
	<body style="-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
		<table class="table table-mail" style="width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)">
			<tr>
				<td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
				<td align="center" style="padding:7px 0">
					<table class="table" bgcolor="#ffffff" style="width:100%">
						<tr>
							<td align="center" class="logo" style="border-bottom:4px solid #333333;padding:7px 0">
								<a title="El Desguace de la red" href="http://tienda.eldesguacedelared.com" style="color:#337ff1">
									<img src="http://eldesguacedelared.com/img/logo200.png" alt="El Desguace de la Red" />
								</a>
							</td>
						</tr>

<tr>
	<td align="center" class="titleblock" style="padding:7px 0">
		<font size="2" face="Open-sans, sans-serif" color="#555454">
			<span class="title" style="font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px">Hola '.$nombre.' '.$apellidos.',</span><br/>
			<span class="subtitle" style="font-weight:500;font-size:16px;text-transform:uppercase;line-height:25px">Gracias por crear una cuenta de cliente en El Desguace de la red.</span>
		</font>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
		<table class="table" style="width:100%">
			<tr>
				<td width="10" style="padding:7px 0">&nbsp;</td>
				<td style="padding:7px 0">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<p data-html-only="1" style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">
							Detalles de su cuenta en El desguace de la red						</p>
						<span style="color:#777">
							Estos son sus datos de acceso:<br /> 
							<span style="color:#333"><strong>E-mail: '.$email.' </strong></span><br />
							<span style="color:#333"><strong>Password:</strong></span> '.$cad.'
						</span>
                        Pronto recibira un email con las piezas que le hemos encontrado y podra valorarlas mediante fotos y comprarla si lo desea.
					</font>
				</td>
				<td width="10" style="padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
		<table class="table" style="width:100%">
			<tr>
				<td width="10" style="padding:7px 0">&nbsp;</td>
				<td style="padding:7px 0">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<p style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">Consejos de Seguridad:</p>
						<ol style="margin-bottom:0">
							<li>Cambie su clave autogenerada al iniciar sesión</li>
							<li>Mantenga los datos de su cuenta en un lugar seguro.</li>
							<li>No comparta los detalles de su cuenta con otras personas.</li>
							<li>Cambie su clave regularmente.</li>
							<li>Si sospecha que alguien está usando ilegalmente su cuenta, avísenos inmediatamente.</li>
						</ol>
					</font>
				</td>
				<td width="10" style="padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="linkbelow" style="padding:7px 0">
		<font size="2" face="Open-sans, sans-serif" color="#555454">
			<span>Ahora podrá realizar pedidos en nuestra tienda: <a href="http://tienda.eldesguacedelared.com" style="color:#337ff1">El Desguace de la Red</a></span>
		</font>
	</td>
</tr>

						<tr>
							<td class="space_footer" style="padding:0!important">&nbsp;</td>
						</tr>
						<tr>
							<td class="footer" style="border-top:4px solid #333333;padding:7px 0">
								<span><a href="http://eldesguacedelared.com" style="color:#337ff1">El Desguace de la red</a> desarrollado por <a href="http://www.benyapps.com" style="color:#337ff1">Benyapps&trade;</a></span>
							</td>
						</tr>
					</table>
				</td>
				<td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</body>
</html>';    
     
 $asunto1="Alta de Usuario";
 $headers1="From: $desde\r\n".
					"Reply-To: {$adminemail}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/html; charset=UTF-8";
                       
   mail($email, $asunto1, $correoweb,$headers1);               
                       
                       
                       
                       
                       ///////////////////FINAL REDIRECCION Y REFRESH
 }else{
     
 $headers2="From: $desde\r\n".
    				"Reply-To: {$adminemail}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/html; charset=UTF-8";
     
     $asunto2="Recordatorio Usuario";
     
     $correoweb2='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">
       <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Mensaje desde El Desguace de la Red</title>
		

		<style>	@media only screen and (max-width: 300px){ 
				body {
					width:218px !important;
					margin:auto !important;
				}
				.table {width:195px !important;margin:auto !important;}
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}		
				span.title{font-size:20px !important;line-height: 23px !important}
				span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}		
				td.box p{font-size: 12px !important;font-weight: bold !important;}
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 200px!important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
	@media only screen and (min-width: 301px) and (max-width: 500px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}	
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 293px !important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}
				
			}
	@media only screen and (min-width: 501px) and (max-width: 768px) {
				body {width:478px!important;margin:auto!important;}
				.table {width:450px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}			
			}
	@media only screen and (max-device-width: 480px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
				
				.table-recap{width: 285px!important;}
				.table-recap tr td, .conf_body td{text-align:center!important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
</style>

	</head>
	<body style="-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
		<table class="table table-mail" style="width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)">
			<tr>
				<td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
				<td align="center" style="padding:7px 0">
					<table class="table" bgcolor="#ffffff" style="width:100%">
						<tr>
							<td align="center" class="logo" style="border-bottom:4px solid #333333;padding:7px 0">
								<a title="El Desguace de la red" href="http://tienda.eldesguacedelared.com" style="color:#337ff1">
									<img src="http://eldesguacedelared.com/img/logo200.png" alt="El Desguace de la Red" />
								</a>
							</td>
						</tr>

<tr>
	<td align="center" class="titleblock" style="padding:7px 0">
		<font size="2" face="Open-sans, sans-serif" color="#555454">
			<span class="title" style="font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px">Hola '.$nombre.' '.$apellidos.',</span><br/>
			<span class="subtitle" style="font-weight:500;font-size:16px;text-transform:uppercase;line-height:25px">Usted ya tiene una cuenta en El Desguace de la red. Debido a que no es el primer pedido que realiza</span>
		</font>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
		<table class="table" style="width:100%">
			<tr>
				<td width="10" style="padding:7px 0">&nbsp;</td>
				<td style="padding:7px 0">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<p data-html-only="1" style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">
							Detalles de su cuenta en El desguace de la red						</p>
						<span style="color:#777">
							Sus datos de acceso estan relacionados con el siguiente email:<br /> 
							<span style="color:#333"><strong>E-mail: '.$email.' </strong></span><br /><br />
							<span style="color:#333"><strong>Si no recuerda su contraseña pulse en el siguiente link para restablecerla.</strong></span><a href="http://tienda.eldesguacedelared.com/index.php?controller=password">Restablecer contraseña</a>
						</span>
                        Pronto recibira un email con las piezas que le hemos encontrado y podra valorarlas mediante fotos y comprarla si lo desea.
					</font>
				</td>
				<td width="10" style="padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
		<table class="table" style="width:100%">
			<tr>
				<td width="10" style="padding:7px 0">&nbsp;</td>
				<td style="padding:7px 0">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<p style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">Consejos de Seguridad:</p>
						<ol style="margin-bottom:0">
							
							<li>Mantenga los datos de su cuenta en un lugar seguro.</li>
							<li>No comparta los detalles de su cuenta con otras personas.</li>
							<li>Cambie su clave regularmente.</li>
							<li>Si sospecha que alguien está usando ilegalmente su cuenta, avísenos inmediatamente.</li>
						</ol>
					</font>
				</td>
				<td width="10" style="padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="space_footer" style="padding:0!important">&nbsp;</td>
</tr>
<tr>
	<td class="linkbelow" style="padding:7px 0">
		<font size="2" face="Open-sans, sans-serif" color="#555454">
			<span>Ahora podrá realizar pedidos en nuestra tienda: <a href="http://tienda.eldesguacedelared.com" style="color:#337ff1">El Desguace de la Red</a></span>
		</font>
	</td>
</tr>

						<tr>
							<td class="space_footer" style="padding:0!important">&nbsp;</td>
						</tr>
						<tr>
							<td class="footer" style="border-top:4px solid #333333;padding:7px 0">
								<span><a href="http://eldesguacedelared.com" style="color:#337ff1">El Desguace de la red</a> desarrollado por <a href="http://www.benyapps.com" style="color:#337ff1">Benyapps&trade;</a></span>
							</td>
						</tr>
					</table>
				</td>
				<td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
			</tr>
		</table>
	</body>
</html>';
     
     
     
     
     mail($email, $asunto2, $correoweb2,$headers2);
     
     
 }

                       mysqli_close($link);
                      $this->redirect(array('view','id'=>$model->id));  
                      $this->refresh();
		}
                }
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pedido']))
		{
			$model->attributes=$_POST['Pedido'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pedido');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pedido('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pedido']))
			$model->attributes=$_GET['Pedido'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Pedido::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pedido-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

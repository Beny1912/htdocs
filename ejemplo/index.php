<?php
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("juanDesguaceCopia");

//////////////pasword generado
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<8;$i++) {
$cad .= substr($str,rand(0,62),1);
}

/////concatenar cookie key y transformar a md5
$cookiekey="rvB1KnYEzwyp3E2JMbiRFpHZkFdCXmYdLhs9pPMFEASLNRQykSMYiEOg";

$cookiekey.=$cad;

 $passAuto=md5($cookiekey);

print $passAuto;
$email="beny.reading@terra.com"; //cambiar
$nombre="Beny"; ///cambiar
$apellidos="Perez"; //cambiar
$ahora=date('Y-m-d H:i:s');
$active=1;
$is_guest=0;
$securekey=md5(uniqid(rand(), true));
$max_payments=0;
$id_lang=1;
$id_default_group=3;
$id_risk=0;
$id_country=6;
$id_state=351; ////cambiar
$direccion="Gran Capitan,2";////cambiar
$postcode="41710";///cambiar
$city="Utrera";////cambiar
$phone="684104623";///cambiar
$alias="Casa";

//////////////////////////////////////////FIN DECLARACION VARIABLES
////busca si el email esta en bd

$sql="SELECT COUNT(*) AS esta FROM ps_customer WHERE email='$email'";
$result=mysql_query($sql);

$data=mysql_fetch_assoc($result);

////si no esta introducir en tabla clientes
if($data['esta']==0){

	$sql1="INSERT INTO ps_customer(id_lang,id_default_group,id_risk,firstname,lastname,email,passwd,active,is_guest,date_add,date_upd,last_passwd_gen,secure_key,max_payment_days) VALUES('$id_lang','$id_default_group','$id_risk','$nombre','$apellidos','$email','$passAuto','$active','$is_guest','$ahora','$ahora','$ahora','$securekey','$max_payments')";
	$result1=mysql_query($sql1);

	if($result1){
	echo "hecho inserccion cliente";
	}
////despues de insertar datos personales insertar datos de la direccion


///////////////primero buscar id del cliente
	$sql3="SELECT id_customer FROM ps_customer WHERE email='$email'";
	$result3=mysql_query($sql3);
	$id_cl_array=mysql_fetch_assoc($result3);
	$idcliente=$id_cl_array['id_customer'];


	if($result3){
	echo "hecho busqueda id cliente";
	}
////////////ahora insertar


	$sql2="INSERT INTO ps_address (id_country,id_state,id_customer,alias,lastname,firstname,address1,postcode,city,phone,date_add,date_upd,active) VALUES('$id_country','$id_state','$idcliente','$alias','$apellidos','$nombre','$direccion','$postcode','$phone','$city','$ahora','$ahora','$active')";
	$result2=mysql_query($sql2);

	if($result2){
	echo "hecho inserccion direccion";
	}

/////////////ahora insertar grupos pertenece

	$sql4="INSERT INTO ps_customer_group(id_customer,id_group) VALUES('$idcliente',1)";
	$result4=mysql_query($sql4);


	if($result4){
	echo "hecho inserccion grupo1";
	}

	$sql5="INSERT INTO ps_customer_group(id_customer,id_group) VALUES('$idcliente',2)";
	$result5=mysql_query($sql5);


	if($result5){
	echo "hecho inserccion grupo2";
	}
	$sql6="INSERT INTO ps_customer_group(id_customer,id_group) VALUES('$idcliente',3)";
	$resul6=mysql_query($sql6);


	if($result6){
	echo "hecho inserccion grupo3";
	}



}
else{

echo "YA ESTA EN BD";
}
 ?>
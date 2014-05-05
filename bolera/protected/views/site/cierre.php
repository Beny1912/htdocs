

<script type="text/javascript">
$(document).ready(function(){
        $("#fecha").change(function(){
       
       
       var req;

var respuesta;



function leer_doc(url) {

 

 req = false;

 

 // Llama objeto XMLHttpRequest

 if (window.XMLHttpRequest) {

   req = new XMLHttpRequest();

   if (req.overrideMimeType) {

     req.overrideMimeType('text/xml'); 

   }

 

 // Si no funciona intenta utiliar el objeto IE/Windows ActiveX 

 } else if (window.ActiveXObject) {

   req = new ActiveXObject("Microsoft.XMLHTTP"); 

 }

 

 if(req!=null){

   req.onreadystatechange = procesarRespuesta;

   req.open('GET', url, true);

   req.send(null);

 } 

 

}



function autentica(){

 fecha = document.getElementByName("fecha").value;

 url = "/site/existe&fecha=" + fecha;

 leer_doc(url);

}



function procesarRespuesta(){



 respuesta = req.responseHTML;

 var existe = respuesta.getElementsByTagName('existe').item(0).firstChild.data;

   if (existe=="true")

    document.getElementById("error").style.visibility = "visible";

   else

    document.getElementById("error").style.visibility = "hidden";

}
       
       
       
       
        });
});
</script>

<div class="row">
    
    <div class="">
        <h1 class="text-center">Cerrar Caja</h1><br>
        <form action="index.php?r=site/cierre" method="POST">
            Dia:
            <?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'fecha',
  'attribute'=>'fecha',
    'language'=>'es',
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
         
    ),
    'htmlOptions'=>array(
        'required'=>'true',
        
    ),
));
?>
            <span id="error" style="font-family: Verdana, Arial, 
   Helvetica, sans-serif; font-size: 12pt;color: #CC3300;
  position:relative;visibility:hidden;">
Ya ha realizado un cierre para este dia!!
</span>
            <br><br> <button type="submit" name="cerrar" id="cerrar" class="btn btn-primary">Cerrar Caja</button>  
        </form>
        <?php
        
        if(isset($_POST['cerrar'])){
            $hora=date("Y-m-d H:i:s");
            $fecha=$_POST['fecha'];
            
          $a= Yii::app()->db->createCommand("INSERT INTO cierre (fecha,hora) VALUES ('$fecha','$hora')")->execute(); 
            if($a){ ?>
                <script>alert("Cierre realizado");</script>
           <?php }
           else{ ?>
               <script>alert("Cierre no realizado. Pruebe otra vez");</script>
           <?php }
        }
        
        ?>
        
    </div>

    
</div>

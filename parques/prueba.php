<html>
    <head>
         
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

        <script>
        $(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents p').size() + 1;
        
        $('#addScnt').live('click', function() {
             //  $('<p><label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
               
    $('<p><div class="form-group"><label class="col-md-4 control-label" for="nombre">Nombre</label><div class="col-md-4"><input id="nombre_'+ i +'" name="nombre[]" type="text" placeholder="Introduzca nombre" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="apellidos">Apellidos</label><div class="col-md-4"><input id="apellidos_'+ i +'" name="apellidos[]" type="text" placeholder="Introduzca apellidos" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="cumple">Cumpleaños</label><div class="col-md-4"><input id="cumple_'+ i +'" name="cumple[]" type="text" placeholder="Introduzca fecha nacimiento" class="form-control input-md"></div></div><div class="form-group"><label class="col-md-4 control-label" for="padres">Padres</label><div class="col-md-4"><input id="padres_'+ i +'" name="padres[]" type="text" placeholder="Introduzca padres" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="telefono">Telefono</label><div class="col-md-4"><input id="telefono_'+ i +'" name="telefono[]" type="text" placeholder="Introduzca telefono" class="form-control input-md" required=""></div></div><a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv)

    
    
    i++;
                return false;
        });
        
        $('#remScnt').live('click', function() { 
                if( i > 2 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});
        </script>
    </head>

    <body>
      
        <h2><a href="#" id="addScnt">Add Another Input Box</a></h2>

<div id="p_scents">
    
    
    <p><div class="form-group"><label class="col-md-4 control-label" for="nombre">Nombre</label><div class="col-md-4"><input id="nombre" name="nombre[]" type="text" placeholder="Introduzca nombre" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="apellidos">Apellidos</label><div class="col-md-4"><input id="apellidos" name="apellidos[]" type="text" placeholder="Introduzca apellidos" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="cumple">Cumpleaños</label><div class="col-md-4"><input id="cumple" name="cumple[]" type="text" placeholder="Introduzca fecha nacimiento" class="form-control input-md"></div></div><div class="form-group"><label class="col-md-4 control-label" for="padres">Padres</label><div class="col-md-4"><input id="padres" name="padres[]" type="text" placeholder="Introduzca padres" class="form-control input-md" required=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="telefono">Telefono</label><div class="col-md-4"><input id="telefono" name="telefono[]" type="text" placeholder="Introduzca telefono" class="form-control input-md" required=""></div></div></p>

    

        </div>
        
     
    </body>




</html>


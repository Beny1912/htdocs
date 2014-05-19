var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 37.1846634,
        lng: -5.7798365,
    });
    map.addMarker({
        lat: 37.1846634,
        lng: -5.7798365,
        title: 'Direccion',      
        infoWindow: {
            content: '<h5 class="title">Academia de Peluqueria y Estetica Pro Unique</h5><p><span class="region">Avda/ Maria Auxiliadora,29</span><br><span class="postal-code">41710 Utrera</span><br><span class="country-name">España</span></p>'
        }
        
    });

});



37.1846634,-5.7798365
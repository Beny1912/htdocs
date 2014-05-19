/* Flex slider */

$(window).load(function() {

	$('#header-flexslider').flexslider({
		animation: "fade",
		direction:"vertical",
		controlNav: false
	});
	
	$('#testi-flexslider').flexslider({
		animation: "fade",
		controlNav: false
	});

	$('#quote-flexslider').flexslider({
		animation: "fade",
		controlNav: true
	});
});

/* Owl Carousel */

$(document).ready(function() {

	var recent = $("#owl-recent");
	var client = $("#owl-client");
	
	recent.owlCarousel({
		autoPlay: 3500, //Set AutoPlay to 4 seconds
		items : 4,
		slideSpeed : 1000,
		scrollPerPage : true,
		stopOnHover : true,
		mouseDrag : false,
		pagination : false
	});
	
	client.owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 4 seconds
		slideSpeed : 1000,
		scrollPerPage : true,
		stopOnHover : true,
		mouseDrag : false, 
		pagination : false
	});
	
	
	$(".next").click(function(){
			recent.trigger('owl.next');
			client.trigger('owl.next');
	})
	  
	$(".prev").click(function(){
			recent.trigger('owl.prev');
			client.trigger('owl.prev');
	})
});


/* One Page Navigation */

$('.nav').onePageNav({
    currentClass: 'active',
    changeHash: true,
    scrollSpeed: 1000,
    scrollThreshold: 0.1,
    easing: 'swing'
});

$('#model').onePageNav({
    currentClass: 'active',
    changeHash: true,
    scrollSpeed: 1000,
    scrollThreshold: 0.1,
    easing: 'swing'
});

/* Nice Scroll */

$("html").niceScroll({
	cursorcolor:"#555",
	cursoropacitymin:0.2,
	cursoropacitymax:0.3,
	cursorwidth:10,
	cursorborder:"0px",
	cursorborderradius:"0px",
	cursorminheight:50,
	zindex:100000,
	mousescrollstep:40
});

/* Parallax */

$(document).ready(function(){
	$('.h-parallax').stellar();
	$('.q-parallax').stellar();
	$('.lv-parallax').stellar();
});

/* Isotype */
var $container = $('#portfolio');

// Initialize isotope
$container.imagesLoaded( function(){
  $container.fadeIn(1000).isotope({
    layoutMode : 'fitRows',
    itemSelector : '.p-element'
  });
});

// Filter items when filter link is clicked

$('#filters a').click(function(){
	var selector = $(this).attr('data-filter');
	$container.isotope({ filter: selector });
	return false;
});  

$(document).ready(function() {
	$('.p-hover').magnificPopup({
		delegate: 'a', 
		type: 'image',
		gallery:{
			enabled:true
		}
	});
});

/* Count */

$('.status-count h3').waypoint(function(down){
	if(!$(this).hasClass('finish'))
	{
		$(this).countTo();
		$(this).addClass('finish');
	}
},{ offset: '10%' });

 /* GMAP */
 
 $('#my_map').gMap({
	address: "Rainham Marshes RSPB Nature Reserve, London",
	zoom: 13,
	markers:[
		{
			address: "Rainham Marshes RSPB Nature Reserve, London",
			html: "<h5>Gibson</h5><p>89 Jack Street<br />Madiwala<br />Bangalore - 560068</p>",
			popup: true
		}
	]
});

/* Scroll To Top Starts */

$(".totop").hide();

$(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>300)
		{
			$('.totop').fadeIn();
		} 
		else
		{
			$('.totop').fadeOut();
		}
	});

	$('.totop a').click(function (e) {
		e.preventDefault();
		$('body,html').animate({scrollTop: 0}, 500);
	});
 });	

 /* Scroll To Top Ends */
 
/* Popover */

$('.feature-content a img').popover();
			
/* Side Menu */
			
$(".side-menu").pageslide({ 
	direction: "left", 
	modal: true 
});
			
/* Service Starts */

$('.service-item').waypoint(function(down){
	$(this).addClass('animated fadeInUp');
}, { offset: '40%' });

/* Service Ends */

/* Feature Starts */

$('.feature-content a.iphone img').waypoint(function(down){
	$(this).addClass('animated fadeInLeftBig');
}, { offset: '15%' });

$('.feature-content a.laptop img').waypoint(function(down){
	$(this).addClass('animated fadeInUp');
}, { offset: '0.6%' });

$('.feature-content a.ipad img').waypoint(function(down){
	$(this).addClass('animated fadeInRightBig');
}, { offset: '12%' });

/* Feature Ends */
 
/* Hero Starts */

$('.hero h2').waypoint(function(down){
	$(this).addClass('animated flipInX');
}, { offset: '2%' });

/* Hero Ends */

/* Pricing Starts */

$('.pricing-item.p-left').waypoint(function(down){
	$(this).addClass('animated fadeInLeft');
}, { offset: '1%' });

$('.pricing-item.p-center').waypoint(function(down){
	$(this).addClass('animated fadeInUp');
}, { offset: '1%' });

$('.pricing-item.p-right').waypoint(function(down){
	$(this).addClass('animated fadeInRight');
}, { offset: '1%' });

/* Pricing Ends */

/* Quote Starts */

$('.quote-content').waypoint(function(down){
	$(this).addClass('animated fadeIn');
}, { offset: '5%' });

/* Quote Ends */

/* Our Team Starts */

$('.our-team-item').waypoint(function(down){
	$(this).addClass('animated fadeInUp');
}, { offset: '1%' });

/* Our Team Ends */

/* Love Starts */

$('.love h2').waypoint(function(down){
	$(this).addClass('animated fadeIn');
}, { offset: '1%' });

/* Love Ends */

/* Contact Us Starts */

$('.contact-item').waypoint(function(down){
	$(this).addClass('animated fadeInUp');
}, { offset: '1%' });

/* Contact US Ends */

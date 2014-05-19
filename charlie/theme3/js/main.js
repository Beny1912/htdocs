/****************************/
/* Theme name  : Brave      */
/* Author name : Ashok      */
/****************************/

/* ********************** */
/* On Scroll Fixed Header */
/* ********************** */

$(window).scroll(function() {
	if ($(window).scrollTop() >= 10){
		/* Add class "fixed" on scroll */
		$(".header-navbar").addClass("fixed");
	}
	else {
		$(".header-navbar").removeClass("fixed");
	}
});

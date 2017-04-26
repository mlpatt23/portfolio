$("document").ready(function() {
	
	//Enables scrollspy feature
	$("#nav").scrollspy({ offset: -75 });
	 
	 
	//Prevents page from reloading when clicking on disabled link
	$(".coming-soon").click(function(e) {
		e.preventDefault();
	});
	
	
	// Adds active class to portfolio nav link on single-projects.php
	$(".single-projects header nav ul #home-link").removeClass("active");
	
	$(".single-projects header nav ul #portfolio-link").addClass("active");
	
	
	
});
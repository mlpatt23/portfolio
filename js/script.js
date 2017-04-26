$("document").ready(function() {
	
	//Enables scrollspy feature
	$("#nav").scrollspy({ offset: -75 });
	 
	 
	//Prevents page from reloading when clicking on disabled link
	$(".coming-soon").click(function(e) {
		e.preventDefault();
	});
	
});
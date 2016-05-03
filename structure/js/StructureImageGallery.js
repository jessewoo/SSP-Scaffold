//Purpose: Change Gallery to PV Viewer

$(document).ready(function()
{
	var hash = window.location.hash.substring(1);	
	// console.log(hash);
	
	$(window).on('hashchange', function() {
		var hash = window.location.hash.substring(1);	
	  	// console.log(hash);
	
		if (hash == "PVViewer") {
			$("#imagegallery_summary").hide();
			$("#pv_summary").removeClass("hide");
			$("#pv_summary").show();
		}

		if (hash == "ImageGallery") {
			$("#pv_summary").hide();
			$("#pv_summary").addClass("hide");
			$("#imagegallery_summary").show();
		}
	
	});
	
});
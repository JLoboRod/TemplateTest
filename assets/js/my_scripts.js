jQuery(document).ready(function() {
	console.log("my_scripts cargado...");

	$(".mboxes_close").click(function(){
		$(this).closest(".alert").fadeOut();
		return false;
	});
});

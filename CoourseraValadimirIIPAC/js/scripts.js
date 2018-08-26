$(document).ready(function() {

	$("#btnCursos").click(function(event) {
		event.preventDefault();
	    $("#contenido").load('miscursos.php');
	    });
});
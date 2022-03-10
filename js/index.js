	$(document).ready(function(){
		$("#mainPlace").load("home.php");

		$('#homelink[href]').on('click', function() {
			event.preventDefault();
			$("#mainPlace").load("home.php");
		});

		$('.curriculolink[href]').on('click', function() {
			event.preventDefault();
			$("#mainPlace").load("curriculo.php");
		});
		
	});
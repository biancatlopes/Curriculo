<?php
?>
<link href="css/home.css" rel="stylesheet">
  <br/><br/><br/><br/><br/><br/><br/>
<div class="container">
	<div class="row">

		<div class="col">	
			<center>
				<img style="right: 0px;" class="imgEsquerda" src="img/principal.png">
			</center>
		</div>
		
		<div class="col">
		    <br/><br/><br/>
	 		<p class="mb-0 "> <h1>Bem-Vindo (a)!</h1> </p>
			<footer >Ao meu Curriculo </footer> <br/>
			<a href="" class="curriculobtn btn btn-outline-secondary">Meu Curriculo</a>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.curriculobtn[href]').on('click', function() {
			event.preventDefault();
			 $(this).parents("#mainPlace").load("curriculo.php");
		});
	});
</script>

			
 					
				
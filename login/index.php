<!DOCTYPE html>
<html>
<head>
	<title>Find Us</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="slider">
		<div><img src="../img/img5.jpg" alt=""></div>
		<div><img src="../img/img2.jpg" alt=""></div>
		<div><img src="../img/img3.jpg" alt=""></div>
		<div><img src="../img/img4.jpg" alt=""></div>
		<div><img src="../img/img1.jpg" alt=""></div>
	</div>
		<script type="text/javascript">
	$(function(){
		$('#slider div:gt(0)').hide();
		setInterval(function(){
		 $('#slider div:first-child').fadeOut(2000).next('div').fadeIn(3000)
		 	.end().appendTo('#slider');
		},10000);
	})
	</script>
	<div id="full-width">
		<div class="container">
			<?php
				include("archivos/cabecera.php");
			?>
			<br><br><br><br>
			<div class="row">
				<section>
					<div class="span4" id="formulario_ingreso">
						<?php
						include("archivos/formulario_ingreso.php");
						?>
					</div>
				</section>
				<section>
					<div class="span7">
						<div id="bienvenida">
							<div class="page-header">
							 	<h1>Bienvenido a <font color="#DF0101">CheckLife</font></h1>
							 </div> 
								<p>
									Esta es una nueva Red Social centrada en Republica Dominicana 
									basada en encontrar a las personas de tu propia zona y tener 
									mas contactos con ellos a la hora de la fiesta. De forma 
									tal que los amigos que tengan virtualmente se vuelvan en 
									sus amigos reales a trav&eacute;z de <strong>Find Us</strong>. 
									Esta nueva red se concentra mas en Night Clubs ya se han Drinks, Licor Store, Barras, 
									Discotecas, etc... animate ha encontrar lo que buscas. 
								</p>
							</div>
					</div>
				</section>
			</div>
			<br>
			<div class="row">
				<section>
					<div class="span5" id="formulario">
						<?php
						include("archivos/formulario.php");
						?>
					</div>
				</section>
				
			</div>
		</div>
		<footer>
			<div class="container">
			<div class="span12">
				<?php
					include("archivos/footer.php");
				?>
			</div>
			</div>
		</footer>
	</div>

</body>
</html>
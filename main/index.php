<!DOCTYPE html>
<html>
<head>
	<title>Find Us</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div id="full-width">
		<div class="container">
			<?php
				include("archivos/cabecera.php");
			?>
			<br><br><br><br>
			<div class="row">
				<section>
					<div class="span3">
						<?php
						include("archivos/menu_lateral_izquierdo.php");
						?>
					</div>
				</section>
				<section>
					<div class="span6">
						<?php
						include("archivos/menu_central.php");
						?>
					</div>
				</section>
				<section>
					<div class="span2">
						<?php
						include("archivos/menu_lateral_derecho.php");
						?>
					</div>
				</section>
			</div>
		</div>
		<footer>
			<div class="span12">
				<?php
					include("archivos/footer.php");
				?>
			</div>
		</footer>
	</div>
</body>
</html>
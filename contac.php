<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<?php include("0head.php") ?>
	<title>Alex G'h - Contácto</title>
	<link rel="stylesheet" href="css/contac.css">
	<?php include("1links_animat.php") ?>
	<script>
		function quitar(){document.getElementById("alert").style.display="none";}
	</script>
</head>

<body>

<?php 
	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{	
		switch ($_GET["id"])
		{
		 	case 'true_mensaje':
		 		echo 
				"<div onclick='quitar()' id='alert'>
					<section id='alert-cont'>
						<p id='alertas'>!Gracias por <br>
						sus comentarios¡</p>
					</section>
				</div>";
		 		break;
		 	case 'false_mensaje':
		 		echo 
				"<div onclick='quitar()' id='alert'>
					<section id='alert-cont'>
						<p id='alertas'>
						El correo no es valido <br>
						intente con otro.
						</p>
					</section>
				</div>";
		 		break;

		 	case 'false_camp':
		 		echo 
				"<div onclick='quitar()' id='alert'>
					<section id='alert-cont'>
						<p id='alertas'>
						Debes llenar todo<br>
						¡Gracias!
						</p>
					</section>
				</div>";
		 		break;
		 	
		 	default:
		 		# code...
		 		break;
		}
	}
?>

<?php include("2No_Script.php") ?>

<!-- -------------------- Banner -------------------- -->

<header class="bg1-banner-cont">
	<?php include("menu.php") ?>
	<section class="caja-title-contac">
		<h1 class="title-contac">C o n t á c t a m e</h1>
	</section>
</header>

<!-- -------------------- Cont 1 -------------------- -->

<div class="bg2">
	<section class="bg2-cont1-cont">
		<article class="info-cont1">
			<div>
				<h3 class="txt">Si tienes una idea de <b>proyecto</b>, una  <br> 
								propuesta de <b>negocio</b> o simplemente <br>
								quieres tener una charla. <b>¡Contactame!</b>
				</h3>
				<h3 class="txt">
					<span class="icon-mobile"> </span> <b>+52 (55) 34 94 - 94 57</b>
				</h3>

				<h3 class="txt">
					<span class="icon-mail3"> </span> <b>contacto@alex-gh.xyz</b>
				</h3>
				
				<h3 class="txt">
					<a href="https://www.facebook.com/AlexGh12.96" class="facebook" target="_blank">
					<span class="icon-facebook2"> </span>
						<b> Facebook</b>
					</a>
				</h3>
			</div>
		</article>

		<div class="caja-formulario">
			<form action="enviar.php" method="POST" class="formulario">
				<input type="text" name="name" placeholder="Nombre" required>
				<input type="email" name="email" placeholder="Correo" required>
				<select name="asunto" id="asunto" required>
					<option value="">Selecciona asunto..</option>
					<option value="Comentario">Comentarios</option>
					<option value="Queja">Queja</option>
					<option value="Cotizacion">Cotización</option>
				</select>
				<textarea name="texto" id="texto" placeholder="Comentario"></textarea>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</section>
</div>

<?php include("pie_pag.php") ?>

<?php include("3Java_Script.php") ?>

</body>
</html>
<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8"
	<?php include("0head.php") ?>
	<title>Alex G'h - Currículum</title>
	<link rel="stylesheet" href="css/curri.css">
	<link rel="stylesheet" href="css/curri_in.css">
	<?php include("1links_animat.php") ?>
</head>

<body>

<?php include("2No_Script.php") ?>

<div class="aviso">
	<h1 class="aviso-pagina-peq">
		:'( <br> <br>
		Pantalla. <br>
		No soportada.
	</h1>
</div>

<?php
if ( isset($_GET['id']) && !empty($_GET['id']) ) 
{
	switch($_GET['id'])
{
	case "in":
			echo 
				'<div id="bg-formulario">
					<section id="bg-center-form">
						<p class="text-form-curri">
						Por seguridad de mi información <br>
						ingresa <b>Clave Maestra</b> o registrate.
						</p>
						<form action="verif.php" method="POST">
								<input type="password" name="pwd-master" class="pwd-master" placeholder="Clave Maestra" >
							<div class="botones">
								<input type="submit" value="Entrar" class="entrar">
								<a href="?id=registro">
									<input type="button" value="Registrate" class="regist">
								</a>
							</div>
						</form>
					</section>
				</div>';
		break;

	case 'registro':
			echo 
				'<div id="bg-formulario">
					<section id="bg-center-form">
						<p class="text-form-curri">
							Se hará un <b>Registro</b> y se <br>
							Enviara la clave al correo ingresado.
						</p>
						<form action="enviar.php" method="POST">
							<input type="text" name="name" class="form-reg" placeholder="Nombre" required>
							<input type="email" name="email" class="form-reg" placeholder="Correo" required>
							<input type="hidden" name="asunto" id="asunto" value="Quiere ingresar a curriculum">
							<input type="hidden" name="texto" id="texto" Value="Sin texto">
							<input type="submit" value="Entrar" class="entrar">
						</form>
					</section>
				</div>';
		break;

	case 'false_camp':
			echo 
				'<div id="bg-formulario">
					<section id="bg-center-form">
						<p class="text-form-curri">
						Por seguridad de mi información <br>
						ingresa <b>Clave Maestra</b> o registrate.
						</p>
						<form action="verif.php" method="POST">
								<input type="password" name="pwd-master" class="pwd-master-camp" placeholder="Es necesaria la clave" required>
							<div class="botones">
								<input type="submit" value="Entrar" class="entrar">
								<a href="?id=registro">
									<input type="button" value="Registrate" class="regist">
								</a>
							</div>
						</form>
					</section>
				</div>';
		break;

	case 'false_index':
			echo 
				'<div id="bg-formulario">
					<section id="bg-center-form">
						<p class="text-form-curri">
						Por seguridad de mi información <br>
						ingresa <b>Clave Maestra</b> o registrate.
						</p>
						<form action="verif.php" method="POST">
								<input type="password" name="pwd-master" class="pwd-master-mal" placeholder="Clave incorrecta" required>
							<div class="botones">
								<input type="submit" value="Entrar" class="entrar">
								<a href="?id=registro">
									<input type="button" value="Registrate" class="regist">
								</a>
							</div>
						</form>
					</section>
				</div>';
		break;

	default:
			echo '';
		break;
}
}else{
	header("location:curiculum.php?id=in");
}

	 ?>

<!-------------------------- Banner -------------------------->

<div class="contenedor-banner-curri">
	<?php include("menu.php") ?>
	<header class="cont-title-curri">
		<h1 class="titlie-curri">
			<a href="Culuculum.pdf" download>
				C  u  r  r  i  c  u  l  u  m
			</a>
		</h1>
		<h2 class="titlie2-curri">
			<a href="Culuculum.pdf" download>
				<span class="icon-file-pdf"> </span> 
				Click para descargar en .pdf
			</a>
		</h2>
	</header>
</div>

<!-------------------------- Menu - Curri -------------------->

<div class="contenedor-banner-curri-2">
	<section class="cont-menu-curri">
		<article class="menu-items-curri">
			<a href="#estud">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum1"></span>
				</p>
			</a>
			<div class="txt">
				<a href="#estud">
					<h2 class="title-menu-curri"><b>Estudios</b></h2>
					<p class="txt-menu-curri">Desempeño academico.</p>
				</a>
			</div>
		</article>
		<article class="menu-items-curri">
			<a href="#estud">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum4"></span>
				</p>
			</a>
			<div class="txt">
				<a href="#habili">
					<h2 class="title-menu-curri"><b>Habilidades</b></h2>
					<p class="txt-menu-curri">Que tengo son...</p>
				</a>
			</div>
		</article>
		<article class="menu-items-curri">
			<a href="#estud">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum2"></span>
				</p>
			</a>
			<div class="txt">
				<a href="#exp-lab">
					<h2 class="title-menu-curri"><b>Experiencia</b></h2>
					<p class="txt-menu-curri">En los trabajos son...</p>
				</a>
			</div>
		</article>
		<article class="menu-items-curri">
			<a href="#estud">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum3"></span>
				</p>
			</a>
			<div class="txt">
				<a href="#hobbies">
					<h2 class="title-menu-curri"><b>Hobbies</b></h2>
					<p class="txt-menu-curri">En mi tiempo libre me gusta...</p>
				</a>
			</div>
		</article>
	</section>
</div>

<!-------------------------- cont 3 -------------------------->

<?php include("3Java_Script.php") ?>

</body>
</html>
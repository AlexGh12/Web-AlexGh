<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<?php include("0head.php") ?>
	<title>Alex G'h - Portafolio</title>
	<link rel="stylesheet" href="css/portafo.css">
	<link rel="stylesheet" href="css/portafo_responsiv.css">
	<link rel="stylesheet" href="css/porta_web.css">
	<link rel="stylesheet" href="css/porta_web_responsiv.css">
	<link rel="stylesheet" href="css/porta_dis_dig.css">
	<link rel="stylesheet" href="css/porta_dis_dig_responsiv.css">
	<link rel="stylesheet" href="css/porta_dis_pri.css">
	<link rel="stylesheet" href="css/porta_dis_pri_responsiv.css">
	<?php include("1links_animat.php") ?>
</head>

<body>
<?php include("2No_Script.php") ?>

<!-------------------- Menu de Portafolio -------------------->
<div class="bg-menu-porta">
<?php include("menu.php") ?>
	<section class="box-center boxs-menu boxs-1">
		<h1 class="title-menu-porta">
			P o r t a f o l i o
		</h1>
	</section>

	<section class="box-center boxs-menu boxs-2">
		<article class="box-option-menu">
			<a href="#web">
				<p class="clase-iconos-porta">
					<span class="big-icon-ico_Portafolio1"></span>
				</p>
				<h3 class="txt-option-menu">Sitios <br>Web</h3>
			</a>
		</article>
		<article class="box-option-menu">
			<a href="#digital">
				<p class="clase-iconos-porta">
					<span class="big-icon-ico_Portafolio2"></span>
				</p>
				<h3 class="txt-option-menu">Diseño <br> Digital</h3>
			</a>
		</article>
		<article class="box-option-menu">
			<a href="#print">
				<p class="clase-iconos-porta">
					<span class="big-icon-ico_Portafolio3"></span>
				</p>
				<h3 class="txt-option-menu">Diseño <br> Impreso</h3>
			</a>
		</article>
	</section>
</div>
<!-------------------- Menu de Portafolio -------------------->

<!-------------------- Contenidos -------------------->

<?php 	
include("Porta-web.php");
// include("portafolio-Dig/Porta-design-digital.php");
// include("portafolio-Print/Porta-design-print.php");
?>

<!-------------------- Contenidos -------------------->

<?php 	
include("pie_pag.php");
include("3Java_Script.php"); 
?>

</body>
</html>
<?php 
session_start();
//session_destroy(); 

if( isset($_COOKIE["id_web_Gh"]) && !empty($_COOKIE["id_web_Gh"]) &&
	isset($_SESSION["curriculum"]) && !empty($_SESSION["curriculum"]) )
{
    echo "";
} 
else {
    header("location:curiculum.php");
}
?>


<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<?php include("0head.php") ?>
	<title>Alex G'h - Currículum</title>
	<link rel="stylesheet" href="css/curri_in.css">
	<link rel="stylesheet" href="css/graf.css">
	<link rel="stylesheet" href="css/curri_in_responsive.css">
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

<!-------------------------- Banner -------------------------->

<div class="contenedor-banner-curri">
	<?php include("menu.php") ?>
	<header class="cont-title-curri">
		<h1 class="titlie-curri">
			<a href="pdf/Culuculum_Alex_Gh.pdf" download>
				C  u  r  r  i  c  u  l  u  m
			</a>
		</h1>
		<h2 class="titlie2-curri">
			<a href="pdf/Culuculum_Alex_Gh.pdf" download>
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
			<a href="#habili">
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
			<a href="#exp-lab">
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
			<a href="#hobbies">
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

<!-------------------------- Estudo -------------------------->

<a name="estud" id="estud"></a>
<div class="bg-title-estud-curri">
	<h2 class="title-estud-curri">E s t u d i o s</h2>
</div>
<div class="bg2-estu">
	<article class="cont-estudios">
		<h2 class="cont-estid-title">Primaria <br>
		2002 - 2008</h2>
		<p class="cont-estid-txt">
			“Profesora: Rosa 
			Navarro” <br>
			<b>Carta Pasante</b>
		</p>
	</article>
	<article class="cont-estudios">
		<h2 class="cont-estid-title">
			Secundaria <br>
			2008 - 2011
		</h2>
		<p class="cont-estid-txt">
			Diurna Matutina
			“Guadalupe Victoria”
			Nº 268 <br>
			<b>Carta Pasante</b>
		</p>		
	</article>
	<article class="cont-estudios">
		<h2 class="cont-estid-title">
			Bachillerato <br>
			2011   - 2015
		</h2>
		<p class="cont-estid-txt">
			Cetis Nº 31 "Leona Vicario"
			Bachillerato Tecnológico 
			en Programación. <br>
			<b>Carta Pasante</b>
		</p>		
	</article>
	<article class="cont-estudios">
		<h2 class="cont-estid-titleimg"></h2>
		<p class="cont-estid-txt">
			<br>
			Certificado de<br>
			Microsoft Office
		</p>		
	</article>
</div>

<!-------------------------- Habilidades -------------------------->

<a name="habili" id="habili"></a>
<div class="bg-title-habili-curri">
	<section class="box-title-habili">
		<h1 class="title-habili">
			Habilidades en:
		</h1>
	</section>
	<section class="bg-1-habili">
		<article class="box-menu-habili">
			<a href="#graf-code">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum5"></span>
				</p>
				<h3 class="txt-menu-habili">
					Programación
				</h3>
			</a>
		</article>
		<article class="box-menu-habili extra">
			<a href="#graf-diseno">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum6"></span>
				</p>
				<h3 class="txt-menu-habili">
					Diseño
				</h3>
			</a>
		</article>
		<article class="box-menu-habili">
			<a href="#graf-extras">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum7"></span>
				</p>
				<h3 class="txt-menu-habili">
					Menejo en...
				</h3>
			</a>
		</article>
	</section>
</div>

	<!-- ------------ Grafica Programacion ----------- -->

<a name="graf-code" id="graf-code"></a>
<div class="bg-2-habili">
	<h1 class="title-in-graf">Habilidades en Programación</h1>
	<section class="marcador-porce">
		<article class="marca-porcen">
			<p class="marc-porcen-p">10%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">20%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">30%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">40%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">50%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">60%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">70%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">80%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">90%</p>
		</article>
		<article class="marca-porcen ultimaray">
			<p class="marc-porcen-p">100%</p>
		</article>
	</section>

	<!-- -------------- -->

	<section class="space-barras-grafic">
		<article class="htmlgraf barragraf">
			<h3 class="in-barra">
				HTML 5 - <b>95%</b>
				<span class="icon-gh-html5"></span>
			</h3>
		</article>
		<article class="cssgraf barragraf">
			<h3 class="in-barra">
				CSS 3 - <b>90%</b>
				<span class="icon-gh-css3"></span>
			</h3>
		</article>
		<article class="phpgraf barragraf">
			<h3 class="in-barra">
				PHP - <b>80%</b>
				<span class="icon-gh-php"></span>
			</h3>
		</article>
		<article class="javascgraf barragraf">
			<h3 class="in-barra">
				JavaScript - <b>60%</b>
				<span class="icon-gh-javascript"></span>
			</h3>
		</article>
		<article class="jquerygraf barragraf">
			<h3 class="in-barra">
				JQuery - <b>70%</b>
				<span class="icon-gh-javascript"></span>
			</h3>
		</article>
		<article class="mysqlgraf barragraf">
			<h3 class="in-barra">
				MySQL - <b>60%</b>
				<span class="icon-gh-mysql"></span>
			</h3>
		</article>
	</section>
</div>

	<!-- ---------- Grafica Diseño ---------- -->

<a name="graf-diseno" id="graf-diseno"></a>
<div class="bg-3-habili">
	<h1 class="title-in-graf">Habilidades en Diseño</h1>
	<section class="marcador-porce">
		<article class="marca-porcen">
			<p class="marc-porcen-p">10%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">20%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">30%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">40%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">50%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">60%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">70%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">80%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">90%</p>
		</article>
		<article class="marca-porcen ultimaray">
			<p class="marc-porcen-p">100%</p>
		</article>
	</section>

	<!-- -------------- -->

	<section class="space-barras-grafic">
		<article class="ilusgraf barragraf">
			<h3 class="in-barra ilustra">
				Adobe Ilustrator - <b>95%</b>
				<span class="icon-gh-adobe-ilustrator"></span>
			</h3>
		</article>
		<article class="photograf barragraf">
			<h3 class="in-barra photosh">
				Adobe Photoshop - <b>85%</b>
				<span class="icon-gh-adobe-photoshop"></span>
			</h3>
		</article>
		<article class="indesgraf barragraf">
			<h3 class="in-barra indesign">
				Adobe InDesign - <b>85%</b>
				<span class="icon-gh-adobe-indesign"></span>
			</h3>
		</article>
		<article class="firewgraf barragraf">
			<h3 class="in-barra firew">
				Adobe FireWorks - <b>90%</b>
				<span class="icon-gh-adobe-fireworks"></span>
			</h3>
		</article>
		<article class="flashgraf barragraf">
			<h3 class="in-barra flash">
				Adobe Flash - <b>90%</b>
				<span class="icon-gh-adobe-flash"></span>
			</h3>
		</article>
	</section>
</div>

	<!-- ------------ Grafica Otros ----------- -->

<a name="graf-extras" id="graf-extras"></a>
<div class="bg-4-habili">
	<h1 class="title-in-graf">Habilidades Extras</h1>
	<section class="marcador-porce">
		<article class="marca-porcen">
			<p class="marc-porcen-p">10%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">20%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">30%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">40%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">50%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">60%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">70%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">80%</p>
		</article>
		<article class="marca-porcen">
			<p class="marc-porcen-p">90%</p>
		</article>
		<article class="marca-porcen ultimaray">
			<p class="marc-porcen-p">100%</p>
		</article>
	</section>

	<!-- -------------- -->

	<section class="space-barras-grafic">
		<article class="wordgraf barragraf">
			<h3 class="in-barra">
			Microsoft Office Word - <b>100% </b>
			<span class="icon-gh-word"></span>
			</h3>
		</article>
		<article class="excelgraf barragraf">
			<h3 class="in-barra">
			Microsoft Office Excel - <b>80% </b>
			<span class="icon-gh-excel"></span>
			</h3>
		</article>
		<article class="powergraf barragraf">
			<h3 class="in-barra">
			Microsoft Office Power Point - <b>95% </b>
			<span class="icon-gh-power-point"></span>
			</h3>
		</article>
		<article class="printgraf barragraf">
			<h3 class="in-barra">
			Impresora y Copiadora - <b>85% </b>
			<span class="icon-gh-print"></span>
			</h3>
		</article>
	</section>
</div>

<!-------------------------- Expe Labor -------------------------->

<a name="exp-lab" id="exp-lab"></a>
<div class="bg-title-expe-curri">
	<h2 class="title-expe-curri">
		Experiencia Laboral
	</h2>
</div>
<div class="bg-2-exp-lab">
	<h3 class="txt-expe-curri">
		<b>En Resumen.</b> <br>
		Tengo 5 Años de Experiencia Laboral en diferentes campos. <br>
		Donde desempeñe: <br><br>

		Reparación y mantenimiento de computo. <br>
		Elaboración y administración de página web. <br>
		Diseño Publicitario Digital e Impreso. <br>
		Atención a clientes. <br>
		Ventas. <br>
	</h3>	
</div>

<!-------------------------- Expe Labor 2 -------------------------->

<div class="bg-txt2-1">
	<section class="bg-txt2">
		<article class="expe-smll ico1"></article>
		<article class="expe-big">
			<p class="txt-expe">
				<b>Cyber Alex</b> | 2010 - 2012 <br> <br>
				• Reparación y mantenimiento de computo <br>
				• Atención a clientes
			</p>
		</article>
	</section>
</div>
<div class="bg-txt2-2">
	<section class="bg-txt2">
		<article class="expe-big">
			<p class="txt-expe txt-smll">
				<b>Revista Cuadrante</b> | Enero 2013 - Septiembre 2014 <br> <br>
				• Elaboración y administración de pagina web <br>
				• Reparación y mantenimiento de computo <br>
				• Diseño Publicitario <br>
				• Maquetación de revista
			</p>
		</article>
		<article class="expe-smll ico2"></article>
	</section>
</div>
<div class="bg-txt2-3">
	<section class="bg-txt2">
		<article class="expe-smll ico3"></article>
		<article class="expe-big">
			<p class="txt-expe">
				<b>Lodicer S.A. de C.V. |</b> Enero 2013 - Septiembre 2014 <br> <br>
				• Elaboración y administración de pagina web <br>
				• Reparación y mantenimiento de computo <br>
			</p>
		</article>
	</section>
</div>
<div class="bg-txt2-4">
	<section class="bg-txt2">
		<article class="expe-big">
			<p class="txt-expe wht">
				<b>Home Store</b> | Octubre 2014 - Febrero 2015 <br> <br>
				• Atención a clientes <br>
				• Vendedor
			</p>
		</article>
		<article class="expe-smll ico4"></article>
	</section>
</div>

<div class="bg-txt2-5">
	<section class="bg-txt2">
		<article class="expe-smll"></article>
		<article class="expe-big">
			<p class="txt-expe wht">
				<b>Flores de Oriente</b> | Septiembre 2015 - Febrero 2016 <br> <br>
				• Elaboración y administración de pagina web <br>
				• Reparación y mantenimiento de computo <br>
			</p>
		</article>
	</section>
</div>

<!-------------------------- Hobbies -------------------------->

<a name="hobbies" id="hobbies"></a>
<div class="bg-title-hobbies-curri">
	<h2 class="title-hobbies-curri">H o b b i e s</h2>
</div>

<div class="bg-total-hobbies">
	<section class="bg-3d-hobbies">
		<article class="bg-2-hobbies hobbi1">
			<div class="box-hobbi-info">
				<p class="clase-iconos-curriculum2">
					<span class="big-icon-ico_Curriculum8"></span>
				</p>
				<p class="txt-hobbie">
					Tengo una rara obsecion por los cubos de rubik, me gusta resolverlos a la mayor velocidad posible, “Me recuerda que en la vida no hay imporbiles”
				</p>
			</div>
			<div class="box-hobbi-info">
				<p class="clase-iconos-curriculum2">
					<span class="big-icon-ico_Curriculum9"></span>
				</p>
				<p class="txt-hobbie">
					Me encanta salir en bici, y algunos dias voy a rodadas nocturnas con un grupos de amigos
				</p>
			</div>
		</article>
		<article class="bg-2-hobbies hobbi2">
			<div class="box-hobbi-info">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum10"></span>
				</p>
				<p class="txt-hobbie txt-blanco">
					Los Video Juegos no es mi preferido pero me agrada para matar el tiempo, pero lo que mas juego es 2048
				</p>
			</div>
			<div class="box-hobbi-info">
				<p class="clase-iconos-curriculum">
					<span class="big-icon-ico_Curriculum11"></span>
				</p>
				<p class="txt-hobbie txt-blanco">
					Relamente me agrada bastante pasar mi tiempo libre en esto, me gusta 
				</p>
			</div>
		</article>
		<article class="bg-2-hobbies hobbi3">
			<div class="box-hobbi-info">
				<p class="clase-iconos-curriculum2">
					<span class="big-icon-ico_Curriculum12"></span>
				</p>
				<p class="txt-hobbie">
					Ir al cine y ver peliculas o series en linea es uno de mis pasatiempos preferidos
				</p>
			</div>
			<div class="box-hobbi-info">
				<p class="clase-iconos-curriculum2">
					<span class="big-icon-ico_Curriculum13"></span>
				</p>
				<p class="txt-hobbie">
					Creo para todo lo que hago tengo musica, generalmente escucho de todo tipo.
				</p>
			</div>
		</article>
	</section>
</div>

<!-------------------------- Pie Pag -------------------------->

<?php include("pie_pag.php") ?>

<?php include("3Java_Script.php") ?>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>NOSOTROS | INFOTECH</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>  
		<script type="text/javascript" src="js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
		
	</head>
	<body id="page2">
		<div class="main zerogrid">
<!--header -->
			<header>
				<div class="wrapper">
                                    <form id="search" method="post">
					<label>Guatemala, <?php 
                                            date_default_timezone_set('America/Guatemala');
                                            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                            echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
                                        ?></label>
                                    </form>
					<h1><a href="index.php" id="logo"><img src="images/logo.png" width="240px" height="44px"/></a></h1>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="index.php"><span>Inicio</span></a></li>
                                                <li class="active"><a href="nosotros.php"><span>Nosotros</span></a></li>
                                                <li><a href="cursos.php"><span>Cursos</span></a></li>
                                                <li><a href="laboratorios.php"><span>Laboratorios</span></a></li>
						<li class="last"><a href="contacto.php"><span>Contáctanos</span></a></li>
					</ul>
				</nav>
			</header>
<!--header end-->
<!--content -->
			<article id="content">
				<div class="wrapper">
					<div class="col-2-3"><div class="wrap-col">
						<h2>¿Quienes somos?</h2>
						<div class="wrapper">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="color2 pad_bot1">Antecedentes</p>
                                                        <p style="text-align: justify">El centro tecnologico tiene como proposito promover en la juventud los nuevos conocimientos sobre las tecnologias de informacion y comunicacion, para establecer estos conocimientos que en la industria informatica son sumamente importantes. Nuestros laboratorios estan ampliamente calificados y equipados con la mejor tecnologia para desarrollar las capacidades de nuestros estudiantes y de esta manera puedan interactuar con lo ultimo en tecnologia de informacion.</p>
                                                        <p style="text-align: justify">Nuestros cursos son impartidos por catedraticos que estan altamente capacitados para brindar todos los conocimientos necesarios para que los alumnos puedan aprender a utilizar las nuevas herramientas e implementar las metodologias que actualmente son utilizadas en la industria informatica.</p>
						</div>
					</div></div>
					<div class="col-1-3"><div class="wrap-col">
						<h2>Acerca de nosotros</h2>
						<div class="wrapper">
							<p class="pad_bot1" style="text-align: justify"><span class="color1">Nuestra Misión</span><br>
									Ser lideres al servicio de los estudiantes, brindando cursos que los capaciten para desarrollarse en el campo laboral de la industria informatica, utilizando el mejor equipo disponible para estar a la vanguardia tecnologica.</p>
						</div>
						<div class="wrapper">
							<p class="pad_bot1" style="text-align: justify"><span class="color1">Nuestra Visión</span><br>
									Lucharemos por ser la mejor opción de trabajo en equipo. Ofrecer nuestros servicios en forma auto sostenible con la convicción que de ello depende el futuro de la juventud y la posibilidad de brindar nuestros servicios en forma competitiva.</p>
						</div>
						<div class="wrapper">
							<p class="pad_bot1"><span class="color1">Nuestros Valores</span><br>
                                                            &#8226;Integridad<br>
                                                            &#8226;Excelencia<br>
                                                            &#8226;Honestidad<br>
                                                            &#8226;Competencia<br>
                                                            &#8226;Respeto<br>
                                                            &#8226;Liderazgo<br>
                                                        </p>
						</div>
					</div></div>
				</div>
			</article>
		</div>
		<div class="bg1">
			<div class="main zerogrid">
				<article id="content2">
					<div class="wrapper">
						<h3>Nuestra historia</h3>
						<div class="col-1-4"><div class="wrap-col">
							<h3 class="color1">1997</h3>
							<p>El centro tecnologico surgio con la idea de brindar un servicio a la juventud y al publico en general, para eliminar la brecha tecnologica.</p>
						</div></div>
						<div class="col-1-4"><div class="wrap-col">
							<h3 class="color1">2006</h3>
							<p>Consideramos ideal el poder retroalimentar el presente proyecto e iniciar acciones que permitan darle mejor eficiencia a los servicios el centro tecnologico posee.</p>
						</div></div>
						<div class="col-1-4"><div class="wrap-col">
							<h3 class="color1">Actualidad</h3>
							<p>Ofrecer nuestros servicios en forma auto sostenible con la convicción que de ello depende el futuro del centro tecnologico y la posibilidad de brindar nuestros servicios en forma competitiva.</p>
						</div></div>
					</div>
				</article>
			</div>
		</div>
		<div class="main zerogrid">
<!--content end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>

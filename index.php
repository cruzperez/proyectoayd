<!DOCTYPE html>
<html lang="es">
    <head>
        <title>INICIO | INFOTECH</title>
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
        <script type="text/javascript" src="js/tms-0.3.js"></script>
        <script type="text/javascript" src="js/tms_presets.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
        
    </head>
    <body id="page1">
        <div class="main zerogrid">
            <!--header -->
            <header>
                <div class="wrapper">
                    <form id="search" method="post">
                        <label>Guatemala, <?php
                            date_default_timezone_set('America/Guatemala');
                            $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                            echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
                            ?></label>
                    </form>
                    <h1><a href="index.php" id="logo"><img src="images/logo.png" width="240px" height="44px"/></a></h1>
                </div>
                <nav>
                    <ul id="menu">
                        <li class="active"><a href="index.php"><span>Inicio</span></a></li>
                        <li><a href="nosotros.php"><span>Nosotros</span></a></li>
                        <li><a href="cursos.php"><span>Cursos</span></a></li>
                        <li><a href="laboratorios.php"><span>Laboratorios</span></a></li>
                        <li class="last"><a href="contacto.php"><span>Contáctanos</span></a></li>
                    </ul>
                </nav>
                <div id="slider">
                    <ul class="items">
                        <li>
                            <img src="images/lab3.jpeg" alt="">
                            <div class="banner">
                                <span class="title"><span class="color3">Centro tecnologico</span><span class="color3">TECNI-CHICOS</span></span>
                            </div>
                        </li>
                        <li>
                            <img src="images/lab1.jpeg" alt="">
                            <div class="banner">
                                <span class="title"><span class="color2">Laboratorio</span><span class="color1">Redes</span></span>
                            </div>
                        </li>
                        <li>
                            <img src="images/lab2.jpeg" alt="">
                            <div class="banner">
                                <span class="title"><span class="color3">Centro tecnologico</span><span class="color3">Disenio Digital</span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!--content -->

        </div>
        <div class="main zerogrid">
            <!--content end-->
            

        </div>
        <script type="text/javascript"> Cufon.now();</script>
        <script>
            $(window).load(function() {
                $('#slider')._TMS({
                    banners: true,
                    waitBannerAnimation: false,
                    preset: 'diagonalFade',
                    easing: 'easeOutQuad',
                    pagination: true,
                    duration: 400,
                    slideshow: 8000,
                    bannerShow: function(banner) {
                        banner.css({marginRight: -500}).stop().animate({marginRight: 0}, 600)
                    },
                    bannerHide: function(banner) {
                        banner.stop().animate({marginRight: -500}, 600)
                    }
                })
            })
        </script>
    </body>
</html>

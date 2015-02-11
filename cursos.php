<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CURSOS | INFOTECH</title>
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
        <script>
            $(window).load(function() {
                $().UItoTop({easingType: 'easeOutQuart'});
                $('#stuck_container').tmStickUp({});
            });
        </script>
        
    </head>
    <body id="page3">
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
                        <li><a href="index.php"><span>Inicio</span></a></li>
                        <li><a href="nosotros.php"><span>Nosotros</span></a></li>
                        <li class="active"><a href="cursos.php"><span>Cursos</span></a></li>
                        <li><a href="laboratorios.php"><span>Laboratorios</span></a></li>
                        <li class="last"><a href="contacto.php"><span>Contáctanos</span></a></li>
                    </ul>
                </nav>
            </header>
            <!--header end-->
            <!--content -->

        </div>
        <div class="bg1">
            <div class="main zerogrid">
                <article id="content2">
                    <section id="content">

                        <div class="container">
                            <div class="row">
                                <div class="grid_12">
                                    <h3>CURSOS DISPONIBLES ACTUALMENTE</h3>
                                </div>
                                <table style="border: #000 1px solid; margin: 0 auto; width:100%;">
                                    <tr>
                                        <th style="border: #000 1px solid; margin: 0 auto; width:25%; color: #ffff00; background-color: #00f">
                                            Código del curso
                                        </th>
                                        <th style="border: #000 1px solid; margin: 0 auto; width:25%; color: #ffff00; background-color: #00f">
                                            Nombre del Curso
                                        </th>
                                        <th style="border: #000 1px solid; margin: 0 auto; width:25%; color: #ffff00; background-color: #00f">
                                            Descripción
                                        </th>
                                        <th style="border: #000 1px solid; margin: 0 auto; width:25%; color: #ffff00; background-color: #00f">
                                            
                                        </th>
                                    </tr>
                                </table>
                                <br>
                                <br>
                                <br>     
                            </div>

                    </section>
                </article>
            </div>
        </div>
        <div class="main zerogrid">
            <!--content end-->
            
        </div>
        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>

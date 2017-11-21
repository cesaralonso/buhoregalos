<?php
    session_start();
    include "core/autoload.php";
    include "core/app/routing.php";

    $view = (!isset($_GET['view'])) ? "index" : $_GET['view'];

    $islogged = (isset($_SESSION['idusuario'])) ? true : false;
    $isleader = (isset($_SESSION['idrol']) && $_SESSION['idrol']==="LIDER") ? true : false;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109722793-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109722793-1');
    </script>
    <title><?=$title?></title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="César Alonso Magaña Gavilanes | Software Insights">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="<?=APP_PATH?>assets/images/buho_ico.png">
    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Cargando iconos -->
    <link href='<?=APP_PATH?>assets/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!-- Carga de Galeria de imágenes -->
    <link rel="stylesheet" href="<?=APP_PATH?>assets/css/owl.carousel.min.css">
    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="<?=APP_PATH?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=APP_PATH?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?=APP_PATH?>assets/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?=APP_PATH?>assets/css/toast.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <script src="<?=APP_PATH?>assets/js/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body <?=(($view !== 'index' && $view !== 'salir' && $view !== 'acceso' && $view !== 'registro') ? 'class="paginas-internas"' : '')?>>
    <section class="bienvenidos">
        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="<?=APP_PATH?>" class="text-white" style="text-decoration:none">
                    <span class="hidden-md-up">
                        BÚHO INTERCAMBIOS
                    </span>
                    <span class="hidden-md-down">
                        <img src="<?=APP_PATH?>assets/images/buho_ico.png" height="52" alt="BÚHO INTERCAMBIOS">
                        BÚHO INTERCAMBIOS
                    </span>
                </a>

                <button type="button" class="boton-buscar hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li <?=(($view === 'index') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>index">Inicio</a></li>
                        <li <?=(($view === 'nosotros') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>nosotros">Nosotros</a></li>

                        <?php if($islogged && !$isleader): ?>
                        <li <?=(($view === 'equipos-participo') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>equipos-participo">Participar</a></li>
                        <?php endif; ?>

                        <?php if(!$islogged): ?>
                        <li <?=(($view === 'registro') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>registro">Regístrate</a></li>
                        <?php endif; ?>

                        <?php if($islogged && $isleader): ?>
                        <li <?=(($view === 'mis-intercambios') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>mis-intercambios">Intercambios</a></li>
                        <li <?=(($view === 'mis-equipos') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>mis-equipos">Equipos</a></li>
                        <?php endif; ?>

                        <?php if($islogged): ?>
                        <li><a href="<?=APP_PATH?>salir">Salir</a></li>
                        <?php endif; ?>

                        <?php if(!$islogged): ?>
                        <li <?=(($view === 'acceso') ? 'class="active"' : '')?>><a href="<?=APP_PATH?>acceso">Acceso</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>

    <?php 
    
        if ($view === "blog") {
            $articulo = (!isset($_GET['articulo'])) ? "index" : $_GET['articulo'];
            include("views/blog/$articulo.php");
        } else {
            include("views/$view.php");
        }
        
     ?>

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-left">
                    <p><?=$seo_description?></p>
                </div>
            </div>
        </div>
    </section>

    <footer class="piedepagina py-1" role="contentinfo">
        <div class="container">
            <p>2017 © BÚHO INTERCAMBIOS - Todos los derechos reservados</p>            
            <p><a href="<?=APP_PATH?>contacto">Contáctanos</a> | <a href="<?=APP_PATH?>politicas-de-privacidad">Políticas de privacidad</a>  | <a href="<?=APP_PATH?>blog">Blog</a></p>            
            <ul class="redes-sociales">
                <li><a href="https://www.facebook.com/Búho-Intercambios-2034332800178704" target="blank"><i class="fa fa-facebook fa-sm" aria-hidden="true"> </i>  </a></li>
            </ul>
            <p>Desarrollado por 
                <a href="http://www.softwareinsights.com.mx" title="Software Insights, Creación, desarrollo y capacitación en desarrollo de software.">
                    <img src="<?=APP_PATH?>assets/images/logo_softwareinsights_mini_white.png" alt="Software Insights">
                </a>
            </p>
        </div>
    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->
    <script src="<?=APP_PATH?>assets/js/bootstrap.min.js"></script>
    <script src="<?=APP_PATH?>assets/js/handlebars/handlebars.js"></script>
    <script src="<?=APP_PATH?>assets/js/wow.min.js"></script>
    <script src="<?=APP_PATH?>assets/js/smooth-scroll.min.js"></script>
    <script src="<?=APP_PATH?>assets/js/sitio.js"></script>

    <!-- Carrusel -->
    <script src="<?=APP_PATH?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoWidth: false,
            navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2,
                    margin: 20
                },
                800: {
                    items: 3,
                    margin: 20
                },
                1000: {
                    items: 4,
                    margin: 20
                }
            }
        })

    </script>

    <!-- Notificaciones -->
    <script src="<?=APP_PATH?>assets/js/toast.js"></script>
    <script src="<?=APP_PATH?>assets/js/html2canvas.js"></script>
    <script>
        var opts = {
            "closeButton" : true,
            "debug" : false,
            "positionClass" : "toast-bottom-right",
            "onclick" : null,
            "showDuration" : "600",
            "hideDuration" : "1300",
            "timeOut" : "7500",
            "extendedTimeOut" : "1000",
            "showEasing" : "swing",
            "hideEasing" : "linear",
            "showMethod" : "fadeIn",
            "hideMethod" : "fadeOut"
        };
        function set_flash(msg, clase){
            switch (clase){
            case 'danger' :
                toastr.error(msg, '¡Error!', opts);
            break;
            case 'error' :
                toastr.error(msg, '¡Error!' , opts);
            break;
            case 'success' :
                toastr.success(msg, '¡Perfecto!', opts);
            break;
            case 'warning' :
                toastr.warning(msg, 'Atención', opts);
            break;
            default :
                toastr.info(msg, 'Mensaje', opts);
            break;
            }
        }
        function setFlash(msg, clase){
          set_flash(msg, clase);
        }

    </script>

    <?php
    //Carga todos los archivos de la carpeta assets/js
    Core::includeJS();
    ?>
</body>
</html>

<?php
     session_start();
     include_once '../Domain/CallAPI.php';
    
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/predesignedroutes";
    
    $result = $callApi->callAPIMethod("GET",$url);
    $routes = json_decode($result);
    $_SESSION['routesP'] = $routes;
    $_SESSION['recomendation'] = true;

?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rutas CR</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="../Styles/img\favicon.ico">

        <!-- Bootstrap CSS
        ============================================ -->		
        <link rel="stylesheet" href="../Styles/css\bootstrap.min.css">
        <!-- font-awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\font-awesome.min.css">
        <!-- et-line-fonts CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\et-line-fonts.css">
        <!-- ionicons CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\ionicons.min.css">
        <!-- magnific-popup CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\magnific-popup.css">
        <!-- animate-headline css
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\animate-headline.css">
        <!-- venobox CSS
                ============================================ -->
        <link rel="stylesheet" href="../Styles/css\venobox.css">
        <!-- slick CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\slick.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\owl.carousel.css">
        <link rel="stylesheet" href="../Styles/css\owl.theme.css">
        <link rel="stylesheet" href="../Styles/css\owl.transitions.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\animate.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\normalize.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\main.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css/style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="../Styles/css\responsive.css">

        <!-- modernizr JS
        ============================================ -->		
        <script src="../Styles/js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <div class="wrapper">
            <header class="header-area">
                <!-- Menu Area
                ============================================ -->
                <div id="main-menu" class="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="logo float-left navbar-header">
                                    <a class="navbar-brand" href="../index.php"><img src="../Styles/img\logo\logo.png" alt=""></a>
                                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-2">
                                        <i class="fa fa-bars menu-open"></i>
                                        <i class="fa fa-times menu-close"></i>
                                    </button>
                                </div>
                                <div class="main-menu float-right collapse navbar-collapse" id="main-menu-2">
                                    <nav>
                                        <ul class="menu one-page">
                                            <li><a href="../index.php">Inicio </a></li>
                                            <li><a href="../index.php#search-area">Busqueda </a></li>
                                            <li><a href="routes_recomendation.php">Ver Sugerencias </a></li>
                                            <li><a href="../index.php#screenshort-area">Iniciar Sesión </a></li>
                                            <li><a href="./Presentation/SiteMap.php">Mapa sitio</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <div id="home-area">
                <div class="slider-active">
                    <div class="sliders-responsive main-slider-area bg-oapcity-40 slider-active-fix" style="background-image: url(../Images/volcan-turrialba-16052016.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="home-sliders clearfix mid-mrg">
                                    <div class="top-text pt-10 mid-mrg">
                                        <div class="slider-text">
                                            <h2>Rutas Recomendadas</h2><br><br>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="row">
                                                <?php
                                                for ($index = 1;$index <= count($routes);$index++) {
                                                    $route = $routes[$index-1];
                                                           ?>
                                                            <div class="col-md-4 col-sm-6">
                                                                <img src="../Images/catarata.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <p class="visible"><?php echo $route->routeName?> </p><br>
                                                                <?php echo '<a href="route_info.php?id=' .($index-1). '" class="visible">Ver mas</a>'?>
                                                            </div>
                                                           <?php
                                                        
                                                }
                                                ?>
                                            </div>
                                            <br>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           <!-- footer area
            ============================================ -->
            <footer class="footer-area pt-100">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <div class="footer-all">
                            <div class="footer-logo logo">
                                <a href="#"><img src="../img\logo\2.png" alt=""></a>
                            </div>
                            <div class="footer-icon">
                                <p>Lo mejor en rutas turísticas en el país.</p>
                            </div>
                            <div class="footer-text">
                                <span>
                                    Copyright©
                                    <a href="http://bootexperts.com/" target="_blank">Rutas CR</a>
                                    2017.All right reserved.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- start scrollUp
            ============================================ -->
            <div id="toTop">
                <i class="fa fa-chevron-up"></i>
            </div>
        </div>


        <!-- jquery
        ============================================ -->		
        <script src="../Styles/js\vendor\jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->		
        <script src="../Styles/js\bootstrap.min.js"></script>
        <!-- ajax mails JS
        ============================================ -->
        <script src="../Styles/js\ajax-mail.js"></script>
        <!-- plugins JS
        ============================================ -->		
        <script src="../Styles/js\plugins.js"></script>
        <!-- google map api -->
        
        <!-- main JS
        ============================================ -->		
        <script src="../Styles/js\main.js"></script>
    </body>
</html>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rutas CR</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="Styles/img\favicon.ico">

        <!-- Bootstrap CSS
        ============================================ -->		
        <link rel="stylesheet" href="Styles/css\bootstrap.min.css">
        <!-- font-awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\font-awesome.min.css">
        <!-- et-line-fonts CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\et-line-fonts.css">
        <!-- ionicons CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\ionicons.min.css">
        <!-- magnific-popup CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\magnific-popup.css">
        <!-- animate-headline css
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\animate-headline.css">
        <!-- venobox CSS
                ============================================ -->
        <link rel="stylesheet" href="Styles/css\venobox.css">
        <!-- slick CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\slick.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\owl.carousel.css">
        <link rel="stylesheet" href="Styles/css\owl.theme.css">
        <link rel="stylesheet" href="Styles/css\owl.transitions.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\animate.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\normalize.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\main.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css/style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="Styles/css\responsive.css">

        <!-- modernizr JS
        ============================================ -->		
        <script src="Styles/js\vendor\modernizr-2.8.3.min.js"></script>
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
                                    <a class="navbar-brand" href="index.html"><img src="Styles/img\logo\logo.png" alt=""></a>
                                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-2">
                                        <i class="fa fa-bars menu-open"></i>
                                        <i class="fa fa-times menu-close"></i>
                                    </button>
                                </div>
                                <div class="main-menu float-right collapse navbar-collapse" id="main-menu-2">
                                    <nav>
                                        <ul class="menu one-page">
                                            <li class="active"><a href="#home-area">Inicio </a></li>
                                            <li><a href="#search-area">Busqueda </a></li>
                                            <li><a href="#features-area">Ver Sugerencias </a></li>
                                            <li><a href="./PresentationAdmin/loginRegister.php">Iniciar Sesión/Registro</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- sliders area
            ============================================ -->
            <div id="home-area">
                <div class="slider-active">
                    <div class="sliders-responsive main-slider-area bg-oapcity-40 slider-active-fix" style="background-image: url(/Styles/img/bg-img/bg-1.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="home-sliders clearfix mid-mrg">
                                    <div class="col-md-7 col-sm-8">
                                        <div class="top-text pt-120 mid-mrg">
                                            <div class="slider-text">
                                                <h2>¿Quieres conocer</h2>
                                                <h2>Costa Rica?</h2>
                                                <p>Te recomendamos rutas turísticas. </p>
                                                <div class="button-set">
                                                    <a class="button" href="#search-area">
                                                        Buscar Rutas
                                                    </a>
                                                    <a class="button active" href="#">
                                                        Ver Sugerencias
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4">
                                        <div class="slider-imgj mid-mrg">
                                            <img src="Styles/img\mobile\1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features area -->
            <div id="search-area" class="ptb-120 fix">
                <div class="container">
                    <div class="about-bottom-left blog-mrg clearfix text-center">
                        <h2>Busqueda de Rutas</h2>
                        <p>Criterios de Búsqueda </p>
                    </div>
                    <div class="row">
                        <form action="./Presentation/routes_found.php" method="post">
                        <div class="col-md-6 col-sm-12 ">
                            <div class="single-features-list text-left">
                                <div class="feature-list-text">
                                    <input name="txtPrice" type="text" placeholder="Precio" class="form-control">
                                </div>
                            </div>
                            <div class="single-features-list text-left">
                                <div class="feature-list-text">
                                   <div class="feature-list-text">
                                    <input name="txtTime" type="text" placeholder="Duracion" class="form-control">
                                </div>
                                </div>
                            </div>
                            <div class="single-features-list text-left">
                                <div class="feature-list-text">
                                    <select name="cbActivity" class="form-control">
                                         <option value="NA">Actividad</option>
                                    </select>
                                </div>
                            </div>						
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="single-features-list text-left">
                                <div class="feature-list-text">
                                    <input name="txtDistance" type="text" placeholder="Distancia" class="form-control">
                                </div>
                            </div>
                            <div class="single-features-list text-left">
                                <div class="feature-list-text">
                                    <select name="cbOrigin" class="form-control">
                                         <option value="NA">Mi ubicación</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-features-list text-left res-features">
                                <div class="feature-list-text">
                                    <input type="submit" name="btnSubmit" value="Buscar" class="form-control">
                                </div>
                            </div>						
                        </div>
                        </form>
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
                                <a href="#"><img src="img\logo\2.png" alt=""></a>
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
        <script src="Styles/js\vendor\jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->		
        <script src="Styles/js\bootstrap.min.js"></script>
        <!-- ajax mails JS
        ============================================ -->
        <script src="Styles/js\ajax-mail.js"></script>
        <!-- plugins JS
        ============================================ -->		
        <script src="Styles/js\plugins.js"></script>
        <!-- google map api -->
        <!-- main JS
        ============================================ -->		
        <script src="Styles/js\main.js"></script>
    </body>
</html>

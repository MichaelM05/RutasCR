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
                                    <a class="navbar-brand" href="index.php"><img src="Images/logo.jpeg" alt="" width="80px" height="80px"></a>
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
                                            <li><a href="./Presentation/SiteMap.php">Mapa sitio</a></li>
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
                    <div class="sliders-responsive main-slider-area bg-oapcity-40 slider-active-fix" style="background-image: url(Images/volcan-turrialba-16052016.jpg)">
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
                                                    <a class="button" href="#preroutes-area">
                                                        Ver Sugerencias
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4">
                                        <div class="slider-imgj mid-mrg">

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
                        <form action="./Presentation/routes_found.php" method="post" id="myform">
                            <div class="col-md-6 col-sm-12 ">
                                <div class="single-features-list text-left">
                                    <div class="feature-list-text">
                                        <h4>Precio</h4>
                                        <select name="cbPrice" class="form-control">
                                            <option value="$0 - $5">$0 - $5</option>
                                            <option value="$5 - $10">$5 - $10</option>
                                            <option value="$10 - $20">$10 - $20</option>
                                            <option value="$20 - $30">$20 - $30</option>
                                            <option value="$30 o más">$30 o más</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-features-list text-left">
                                    <div class="feature-list-text">
                                        <div class="feature-list-text">
                                            <h4>Duración</h4>
                                            <select name="cbTime" class="form-control">
                                            <option value="1 - 2 Horas">1 - 2 Horas</option>
                                            <option value="2 - 4 Horas">2 - 4 Horas</option>
                                            <option value="4 - 6 Horas">4 - 6 Horas</option>
                                            <option value="6 - 8 Horas">6 - 8 Horas</option>
                                            <option value="8 o más Horas">8 o más Horas</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-features-list text-left">
                                    <div class="feature-list-text">
                                        <h4>Actividad</h4>
                                        <select name="cbActivity" class="form-control">
                                            <option value="Cultural">Cultural</option>
                                            <option value="Montaña">Montaña</option>
                                            <option value="Ecológico">Ecológico</option>
                                            <option value="Recreativo">Recreativo</option>
                                        </select>
                                    </div>
                                </div>						
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="single-features-list text-left">
                                    <div class="feature-list-text">
                                        <h4>Distacia</h4>
                                       <select name="cbDistance" class="form-control">
                                            <option value="1 - 2 Km">1 - 2 Km</option>
                                            <option value="2 - 4 Km">2 - 4 Km</option>
                                            <option value="4 - 6 Km">4 - 6 Km</option>
                                            <option value="6 - 8 Km">6 - 8 Km</option>
                                            <option value="8 o más Km">8 o más Km</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-features-list text-left">
                                    <div class="feature-list-text">
                                        <h4>Punto de Origen</h4>
                                        <select name="cbOrigin" id="cbOrigin" class="form-control">
                                            <option value="NA">Mi ubicación</option>
                                            <option value="Alajuela">Alajuela</option>
                                            <option value="Cartago">Cartago</option>
                                            <option value="Guanacaste">Guanacaste</option>
                                            <option value="Heredia">Heredia</option>
                                            <option value="Limón">Limón</option>
                                            <option value="San José">San José</option>
                                            <option value="Puntarenas">Puntarenas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-features-list text-left res-features">
                                    <div class="feature-list-text">
                                        <input style="background: #1659bf; color: #fbfbfc;" type="submit" name="btnSubmit" value="Buscar" class="form-control">
                                    </div>
                                </div>						
                            </div>
                            <input type="hidden" id="lat" name="lat" value="NA">
                            <input type="hidden" id="leng" name="leng" value="NA">
                        </form>
                    </div>
                </div>
            </div>


            <div id="preroutes-area" class="ptb-120 fix">
                <div class="container">
                    <div class="about-bottom-left blog-mrg clearfix text-center">
                        <h2>Rutas recomendadas</h2>
                        <p>Acá podrá ver una serie de rutas recomendadas por otros
                            usuarios las cuales le brindan la oportunidad de conocer
                            otros sitios turísiticos.</p>
                        <div class="button-set">
                            <a class="button" href="./Presentation/routes_recomendation.php">
                                Ver sugerencias
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-area gray-bg pt-100 pb-120">
                <div class="container">
                    <div class="about-bottom-left blog-mrg clearfix text-center">
                        <h2>Créditos</h2>
                        <p>Sitio web desarrollado por estudiantes<br> de la Universidad de Costa Rica, Sede del Atlántico del Recinto Turrialba.</p>
                    </div>
                    <div class="row center-block text-center">
                        <ul>
                            <li>Joseph Cordero Marín</li>
                            <li>Brayan Villalobos Bravo</li>
                            <li>Michael Meléndez Mesén</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- footer area
            ============================================ -->
            <footer class="footer-area pt-100">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <div class="footer-all">
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
        <script src="Styles/js\jquery.blockUI.js"></script>
        
        <script type="text/javascript">
            var lat ="";
            var leng ="";
            $('#myform').submit(function() {
                if(lat === "" && leng === ""){
                    var ubicacion = $('#cbOrigin :selected').val();
                    switch (ubicacion){
                            case "Cartago":
                                lat = "9.862251741694937";
                                leng = "-83.91546249389648";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            case "San José":
                                lat = "9.915826049729528";
                                leng = "-84.06944274902344";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            case "Limón":
                                lat = "9.98805634887536";
                                leng = "-83.04376602172852";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            case "Heredia":
                                lat = "10.0023600";
                                leng = "-84.1165100";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            case "Puntarenas":
                                lat = "9.9762500";
                                leng = "-84.8383600";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            case "Guanacaste":
                                lat = "10,4958";
                                leng = "-85,355";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            case "Alajuela":
                                lat = "10.0162500";
                                leng = "-84.2116300";
                                $("#lat").val(lat);
                                $("#leng").val(leng);
                                return true;
                                break;
                            default :
                                if (!navigator.geolocation){
                                    return;
                                }
                                function success(position) {
                                  setTimeout($.unblockUI, 0); 
                                  lat  = position.coords.latitude;
                                  leng = position.coords.longitude;
                                  $('#myform').submit();

                                }
                                navigator.geolocation.getCurrentPosition(success);
                                $.blockUI({
                                css: {
                                    border: 'none',
                                    padding: '15px',
                                    backgroundColor: '#000',
                                    '-webkit-border-radius': '10px',
                                    '-moz-border-radius': '10px',
                                    opacity: .5,
                                    color: '#fff'
                                },
                                message: "Localizando..."
                                });
                                
                                break;
                        }
                    }else{
                        $("#lat").val(lat);
                        $("#leng").val(leng);
                        return true;
                        
                    }

                return false; // return false to cancel form action
            });
        </script>
    </body>
</html>
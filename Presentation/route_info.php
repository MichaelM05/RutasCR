<?php
    session_start();
    $recomendation = $_SESSION['recomendation'];
    $id = $_GET['id'];
    if($recomendation){
        $routes = $_SESSION['routesP'];
        $route = $routes[$id]->places;
    }else{
        $routes = $_SESSION['routes'];
        $route = $routes[$id];
    }
    $size = count($route);
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
                                    <a class="navbar-brand" href="../index.php"><img src="../Images/logo.jpeg" width="80px" height="80px" alt=""></a>
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
            <!-- sliders area
            ============================================ -->
            <div id="home-area">
                <div class="slider-active">
                    <div class="sliders-responsive main-slider-area bg-oapcity-40 slider-active-fix" style="background-image: url(../Images/volcan-turrialba-16052016.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="home-sliders clearfix mid-mrg">
                                    <div class="top-text pt-10 mid-mrg">
                                        <div class="slider-text">
                                            <h2>Información de la ruta</h2><br><br>
                                        </div>
                                        <div class="col-md-5 col-sm-8">
                                            <?php
                                            for ($index = 0; $index < count($route); $index++) {
                                                $site = $route[$index];
                                            ?>
                                                <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                <?php
                                                    if($index == 0 && $recomendation == false){
                                                        echo '<p class="visible">Usted esta aquí</p>';
                                                    }else{
                                                        echo '<p class="visible">'.$site->nameTouristicPlace.'</p>';
                                                    }
                                                ?>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <?php
                                                    echo '<p ><a href="" onclick="return site('.$index.');" data-toggle="modal" data-target="#site" class="visible">Detalle</a></p>';
                                                    ?>
                                                </div>
                                            </div><br>
                                            <?php
                                               }
                                            ?>
                                            <br><br>
                                        </div>
                                        <div class="col-md-7 col-sm-4">
                                            <div id="hastech"></div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="site" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="nameSite">Modal Header</h4>
                        </div>
                        <div class="modal-body" style="overflow-y: auto;">
                            <p id="description">Some text in the modal.</p><br>
                            <div class="row">
                            <div id="image" class="col-md-6 col-sm-6"></div>
                            <div id="video" class="col-md-6 col-sm-6"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            

           
            <!-- footer area
            ============================================ -->
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
        
        <script src="../Styles/js\plugins.js"></script>
        
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhoeSsQdd0bV6P7eRJLNdT1DW83unihfk"></script>
        <script>
            var route;
            var size;
            function initialize()
            {
                
                route = <?php echo json_encode($route); ?>;
                size = <?php echo $size ?>;
                var origin = route[0].latitude+","+route[0].length;
                var destiny = route[size-1].latitude+","+route[size-1].length;
                var waypoints =  [];
                for(var i=1;i<size-1;i++){
                    waypoints.push({
                    location: route[i].latitude+","+route[i].length
                  });

                }
                var directionsService = new google.maps.DirectionsService;
                var directionsDisplay = new google.maps.DirectionsRenderer;
                directionsDisplay.setOptions( { suppressMarkers: true } );
                var myCenter = new google.maps.LatLng(30.249796, -97.754667);
                var mapProp = {
                    center: myCenter,
                    scrollwheel: false,
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("hastech"), mapProp);
                directionsDisplay.setMap(map);
                directionsService.route({
                origin: origin,
                destination: destiny,
                waypoints: waypoints,
                optimizeWaypoints: true,
                travelMode: 'DRIVING'
              }, function(response, status) {
                if (status === 'OK') {
                  directionsDisplay.setDirections(response);
                } else {
                  window.alert('Directions request failed due to ' + status);
                }
              });
                for(var i=0;i<size;i++){
                    var pos = new google.maps.LatLng(route[i].latitude, route[i].length);
                    var marker = new google.maps.Marker({
                        position: pos,
                        title: route[i].nameTouristicPlace,
                        map: map
                    });
                    addClickHandler(marker,i);
                       
                    marker.setMap(map);
                }
            }
            
            function addClickHandler(theMarker,n) {
                google.maps.event.addListener(theMarker, 'click', function() {
                    site(n);
                    $('#site').modal('show');
                  });
                }
            
            function site(n) {
                        document.getElementById("nameSite").innerHTML= route[n].nameTouristicPlace;
                        document.getElementById("description").innerHTML= route[n].descriptionTouristicPlace;
                        var divImage = document.getElementById("image");
                        var divVideo = document.getElementById("video");
                        divImage.innerHTML="";
                        divVideo.innerHTML="";
                        var images = route[n].images;
                        var img = document.createElement("img");
                        img.src = images[0];
                        img.style= "height:80%";
                        divImage.appendChild(img);
                        var videos = route[n].videos;
                        var video = document.createElement("video");
                        if(typeof videos[0] !== "undefined"){
                            video.src = videos[0];
                            video.style= "height:80%";
                            video.setAttribute("controls","controls") 
                            divVideo.appendChild(video);
                        }

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!-- main JS
        ============================================ -->		
        <script src="../Styles/js\main.js"></script>
    </body>
</html>

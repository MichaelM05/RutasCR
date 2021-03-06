<?php include_once './ReusableHeader.php'; ?>
<div id="wrapper">

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Agregar sitio turístico</h2>   
                </div>
            </div>              
            <!-- /. ROW  -->
            <hr />

            <div class="row center-block">

                <form action="../Actions/TouristicPlaceActions.php" method="POST" >
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" id="txtName" name="txtName" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" id="txtDescription" name="txtDescription" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Precio</label>
                            <select name="cbPrice" class="form-control">
                                <option value="1">$0 - $5</option>
                                <option value="2">$5 - $10</option>
                                <option value="3">$10 - $20</option>
                                <option value="4">$20 - $30</option>
                                <option value="5">$30 o más</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                        </div>
                    </div>    
                    <div class="col-lg-5 col-md-5">
                        <label>Latitud y longitud</label>
                        <input type="hidden" id="lat" name="lat">
                        <input type="hidden" id="leng" name="leng">
                        <div id="hastech"></div><br><br>


                    </div>

                    <div class="col-lg-5 col-md-5">
                        <input type="submit" value="Agregar" name="add" id="add" class="btn btn-success btn-lg btn-block">
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <a class="btn btn-primary btn-lg btn-block" href="./AddImagesVideo.php">Agregar multimedios</a>
                    </div>

                </form>    

            </div>


            <!-- /. ROW  -->           
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>

<?php include_once './ReusableFooter.php'; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhoeSsQdd0bV6P7eRJLNdT1DW83unihfk"></script>
<script>
    var marker = "";
    function getPosition() {
        if (!navigator.geolocation) {
            return;
        }

        function success(position) {
            myCenter = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            initialize();
        }
        navigator.geolocation.getCurrentPosition(success);
        var map = document.getElementById("hastech");
        map.innerHTML = "<br><h4>Localizando...</h4>";
    }

    function initialize()
    {
        var mapProp = {
            center: myCenter,
            scrollwheel: false,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("hastech"), mapProp);
        google.maps.event.addListener(map, "click", function (event) {
            if (marker !== "") {
                marker.setMap(null);
            }
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();
            $("#lat").val(lat);
            $("#leng").val(lng);
            var pos = new google.maps.LatLng(lat, lng);
            marker = new google.maps.Marker({
                position: pos,
                animation: google.maps.Animation.BOUNCE,
                map: map
            });
            marker.setMap(map);
        });
    }
    google.maps.event.addDomListener(window, 'load', getPosition());
</script>
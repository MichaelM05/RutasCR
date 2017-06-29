<?php
include './ReusableHeader.php';
if (isset($_SESSION["routesPred"])) {
    $routes = $_SESSION["routesPred"];
}
?>


<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Agregar sitios a ruta turística</h2>
            </div>           
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="../Actions/PredisignedRouteActions.php">
                    <input type="text" class="contact-text" id="txtNameRoute" name="txtNameRoute" placeholder="Nombre Ruta" />
                    <input type="hidden" id="sites" name="sites">
                    <input type="hidden" id="createRoute" name="createRoute">
                    <input type="submit" class="btn btn-success btn-lg" value="Crear ruta"/>
                </form>
            </div>
        </div>
        <div class="row center-block">
            <div class="row text-center pad-top">
                <?php
                $i = 0;
                foreach ($routes as $currentRoute) {
                    $i++;

                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="div-square" id="site<?php echo $i; ?>">                            
                            <?php
                            $images = $currentRoute->images;
                            ?>
                            <img height="170px" width="200px" src="<?php echo $images[0]; ?>" />
                            <h5><?php echo $currentRoute->nameTouristicPlace ?></h5>
                            <p><?php echo substr($currentRoute->descriptionTouristicPlace, 0, 100) . '...'; ?></p>
                            <input type="submit" value="Agregar Sitio" onclick="addSitesRoute(<?php echo $currentRoute->idTouristicPlace; ?>,<?php echo $i; ?>)"class="btn btn-success" >
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <hr>
        <hr>
    </div>
</div>
<!-- /. PAGE WRAPPER  -->

<?php
include './ReusableFooter.php';
?>

<script>
    var sites = [];
    function addSitesRoute(idSite , count) {

        sites.push(idSite);
        $("#site" + count).hide();
        var sitesString = "";
        for (var i = 0; i < sites.length; i++) {
            sitesString += sites[i] + ';';
        }
        $("#sites").val(sitesString);


    }

</script>

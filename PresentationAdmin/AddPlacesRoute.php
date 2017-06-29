<?php
include './ReusableHeader.php';
include_once '../Business/TouristicPlaceBusiness.php';
include_once '../Business/ImageTouristicPlaceBusiness.php';

$touristicBusiness = new TouristicPlaceBusiness();
$touristicPlaces = $touristicBusiness->getAllTBTouristicPlacees();

$imagesBusiness = new ImageTouristicPlaceBusiness();
$idRoute = 0;
if(isset($_GET['idRoute'])){
    $idRoute = $_POST['idRoute'];
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
        <div class="row center-block">
            <div class="row text-center pad-top">
                <?php
                $i = 0;
                foreach ($touristicPlaces as $currentPlace) {
                    $i++;
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="div-square" id="site<?php echo $i; ?>">                            
                            <?php
                            $images = $imagesBusiness->getImageTouristicPlaceByPlace($currentPlace->getIdTouristicPlace());
                            ?>
                            <img height="170px" width="200px" src="<?php echo $images[0]->getImagePath(); ?>" />
                            <h5><?php echo $currentPlace->getNameTouristicPlace(); ?></h5>
                            <p><?php echo substr($currentPlace->getDescriptionTouristicPlace(), 0, 100) . '...'; ?></p>
                            <input type="submit" value="Agregar Sitio" onclick="addSitesRoute(<?php $currentPlace->getIdTouristicPlace(); ?>,<?php echo $i; ?>)"class="btn btn-success" >
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="../Actions/PredisignedRouteActions.php">
                    <input type="text" class="contact-text" id="txtNameRoute" name="txtNameRoute" placeholder="Nombre Ruta" value="<?php echo $currentPlace->getNameTouristicPlace(); ?>"/><br><br>
                    <input type="hidden" id="sites" name="sites">
                    <input type="hidden" id="updateRoute" name="updateRoute">
                    <input type="hidden" id="idRoute" name="idRoute" value="<?php echo $idRoute;?>">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Actualizar"/>
                </form>
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- /. PAGE WRAPPER  -->

<?php
include './ReusableFooter.php';
?>

<script>
    var sites = [];
    function addSitesRoute(idSite, count) {

        sites.push(idSite);
        $("#site" + count).hide();
        var sitesString = ""
        for (var i = 0; i < sites.length; i++) {
            sitesString += sites[i] + ';';
        }
        $("#sites").val(sitesString);
        alert(sitesString);


    }

</script>

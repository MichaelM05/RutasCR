<?php
include './ReusableHeader.php';
include_once '../Business/TouristicPlaceBusiness.php';
include_once '../Business/ImageTouristicPlaceBusiness.php';

$routesBusiness = new TouristicPlaceBusiness();
$routes = $routesBusiness->getAllTBTouristicPlacees();
$imagesBusiness = new ImageTouristicPlaceBusiness();

?>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Eliminar sitios turísticos</h2>
            </div>
        </div>
        <hr>  
        <div class="row center-block">
            <div class="row text-center pad-top">
                <?php
                foreach ($routes as $currentRoute){
                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="div-square ">
                        <form method="POST" action="../Actions/TouristicPlaceActions.php">
                            <?php 
                                $image = $imagesBusiness->getImageTouristicPlaceByPlace($currentRoute->getIdTouristicPlace());
                            ?>
                            <img height="170px" width="200px" src="<?php echo $image[0]->getImagePath();?>" />
                            <h5><?php echo $currentRoute->getNameTouristicPlace(); ?></h5>
                            <input type="hidden" id="idSite" name="idSite" value="<?php echo $currentRoute->getIdTouristicPlace();?>">
                            <input type="hidden" name="deleteTouristic" id="deleteTouristic" value="deleteTouristic">
                            <input type="submit" value="Eliminar Sitio" class="btn btn-danger">
                        </form><br>
                    </div>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
        <hr>

    </div>
</div>
<!-- /. PAGE WRAPPER  -->

<?php
include './ReusableFooter.php';
?>





<?php
include './ReusableHeader.php';
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
                    for($i = 0; $i<6; $i++) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="div-square">
                            <form>
                                <img height="170px" width="200px" src="../Images/catarata.jpg" />
                                <h4>Lugar <?php echo $i + 1; ?></h4>
                                <p>Descripción</p>
                                <input type="submit" value="Agregar Sitio" class="btn btn-success">
                            </form>
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
                <a class="btn btn-danger btn-lg btn-block" href="./DeletePlacesRoute.php">Eliminar sitios Ruta</a>
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- /. PAGE WRAPPER  -->

<?php
include './ReusableFooter.php';
?>



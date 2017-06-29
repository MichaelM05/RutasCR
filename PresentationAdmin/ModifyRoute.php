<?php
include './ReusableHeader.php';
?>
<div id="wrapper">  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-10">
                    <h2>Modificar rutas creadas</h2>                         
                </div>                       
            </div>              
            <!-- /. ROW  -->
            <hr />

            <div class="row center-block">

                <?php
                for ($i = 0; $i < 6; $i++) {
                    ?>
                    <div class="div-square col-md-3 col-lg-3 col-xs-12">                            

                        <h3>Ruta <?php echo $i + 1; ?></h3><hr />
                        <img src="../assets/img/volcan-Turrialba-680x428.jpg" alt="" width="180" height="180" class="img-responsive col-lg-offset-1"/>
                        <p class=" text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even sli believable Section ve suffered alteration</p>

                        <div class="btn btn-block">
                            <a href="./DeletePlacesRoute.php" class="btn btn-primary">Modificar</a>
                            <a href="./ShowAvailablesPlaces.php" class="btn btn-success">Agregar lugar</a>
                        </div>

                    </div>

                    <?php
                }
                ?>
            </div>            
            <!-- /. ROW  -->           
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<?php
include './ReusableFooter.php';
?>

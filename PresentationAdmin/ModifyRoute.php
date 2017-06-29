<?php
include './ReusableHeader.php';
include_once '../Business/PredesignedRouteBusiness.php';
include_once '../Business/ImageTouristicPlaceBusiness.php';

$predesignedBusiness = new PredesignedRouteBusiness();
$routes = $predesignedBusiness->getAllTBPredesignedRoutees();

$imagesBusiness = new ImageTouristicPlaceBusiness();


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
                foreach ($routes as $currentRoute) {
                    if($currentRoute->getUser() == $_SESSION['user']->idUser){
                    ?>
                    <div class="div-square col-md-3 col-lg-3 col-xs-12">                            
                        <?php 
                        $images = $imagesBusiness->getImageTouristicPlaceByPlace($currentRoute->getIdPredesignedRoute());
                        ?>
                        <h3>Ruta <?php echo $i + 1; ?></h3><hr />
                        <img src="<?php echo $images[0]->getImagePath(); ?>" alt="" width="180" height="180" class="img-responsive col-lg-offset-1"/>
                        <h5><?php echo $currentRoute->getNamePredesignedRoute();?></h5>
                        <div class="btn btn-block">                            
                            <a href="./AddTouristicPlace.php?idRoute=<?php echo $currentRoute->getIdPredesignedRoute(); ?>" class="btn btn-success">Agregar lugar</a>
                            <button onclick="deleteRoute(<?php echo $currentRoute->getIdPredesignedRoute(); ?>)" class="btn btn-primary">Eliminar</button>                            
                        </div>

                    </div>

                    <?php
                    }
                }
                ?>
            </div>            
            <!-- /. ROW  -->           
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- Modal
            ============================================= -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
        </div>

    </div>
</div>

<?php
if (isset($_GET['success'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("Éxito","Éxito al modificar");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['error'])) {
    echo '
                <script>     
                    $(document).ready(function(){
                        modalSelect("Error","Error al modificar");
                        $("#myModal").modal("show");
                    });
                </script>';
}
?>
<script>
    function modalSelect(modalMessage, modalTitle) {
        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
        document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
    }
</script>


<script>
    function deleteRoute(idRoute){
        
        $.ajax({
        data: idRoute,
        url: '../Actions/PredisignedRouteActions.php',
        type: 'post',
        beforeSend: function () {
            
        },
        success: function (response) {
             $(document).ready(function(){
                        modalSelect("Éxito","Éxito al eliminar");
                        $("#myModal").modal("show");
                    });
        },
        error: function () {
            $(document).ready(function(){
                        modalSelect("Error","Error al eliminar");
                        $("#myModal").modal("show");
                    });
        }   
    });
        
    }
    
</script>


<?php
include './ReusableFooter.php';
?>

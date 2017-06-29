<?php
include_once './ReusableHeader.php';
include_once '../Business/UserBusiness.php';
$userBusiness = new UserBusiness();
$users = $userBusiness->getAllTBUsers();
?>     


<div id="wrapper">
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Eliminar Administrador</h2>   
                </div>
            </div>              
            <!-- /. ROW  -->
            <hr />

            <div class="row center-block">

                <div class="panel panel-primary col-lg-10 col-md-10 col-xs-10 col-lg-offset-1">

                    <div class="panel-heading ">Administradores</div>
                    <div class="panel-body">
                        <?php
                        foreach ($users as $currentUser) {
                            ?>
                            <form action="../Actions/UserActions.php" method="POST">
                                <div class="row center-block">   
                                    <div class="col-md-6">
                                        <label><?php echo $currentUser->getFullName(); ?></label>                                        
                                    </div>
                                    <input type="hidden" id="idUser" name="idUser" value="<?php echo $currentUser->getIdUser(); ?>">
                                    <input type="hidden" value="deleteAdmin" id="deleteAdmin" name="deleteAdmin">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-danger" value="Eliminar" />
                                    </div>                             
                                </div><hr/>
                            </form>
                            <?php
                        }
                        ?>                        

                    </div>

                </div>      

            </div>
            <!-- /. ROW  -->           
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<?php include_once './ReusableFooter.php'; ?>
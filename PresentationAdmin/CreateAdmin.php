<?php include_once './ReusableHeader.php'; ?>
<div id="wrapper">

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Crear Administrador</h2>   
                </div>
            </div>              
            <!-- /. ROW  -->
            <hr />

            <div class="row center-block">

                <form action="../Actions/UserActions.php" method="POST" >
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" id="txtName" name="txtName" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" id="txtUserName" name="txtUserName" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" id="txtPassword" name="txtPassword" class="form-control" />
                        </div>
                    </div>
                    <input type="hidden" id="insertUser" name="insertUser" value="insertUser"/>
                    <div class="col-lg-5 col-md-5">                        
                        <input type="submit" value="Crear" class="btn btn-success btn-lg btn-block">
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
include './ReusableFooter.php';

if (isset($_GET['success'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("Éxito","Registro con éxito");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['error'])) {
    echo '
                <script>     
                    $(document).ready(function(){
                        modalSelect("Error","Error al Registrar");
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
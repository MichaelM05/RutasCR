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

                <form action="" method="POST" >
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
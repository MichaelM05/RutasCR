<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simple Responsive Admin</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>        

        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="../assets/img/logo.png" />
                        </a>
                    </div>

                    <span class="logout-spn" >
                        <a href="#" style="color:#fff;">LOGOUT</a>  

                    </span>
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li >
                            <a href="index.php" ><i class="fa fa-desktop "></i>Inicio</a>
                        </li>
                        <li>
                            <a href="modifyroute.php"><i class="fa fa-table "></i>Modificar rutas</a>
                        </li>
                        <li class="active-link">
                            <a href="deleteadmin.php"><i class="fa fa-edit "></i>Eliminar Administrador</a>
                        </li>
                    </ul>
                </div>

            </nav>
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

                    <div class="row">

                        <div class="panel panel-primary col-lg-10 col-md-10 col-xs-10 col-lg-offset-1">

                            <div class="panel-heading ">Administradores</div>
                            <div class="panel-body">
                                
                                <div class="row center-block">   
                                    <div class="col-md-6">
                                        <label>Juan Pérez</label>                                        
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </div>                             
                                </div><hr/>
                                
                                 <div class="row center-block">   
                                    <div class="col-md-6">
                                        <label>Diego Solano</label>                                        
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </div>                             
                                </div><hr />
                                
                                
                                 <div class="row center-block">   
                                    <div class="col-md-6">
                                        <label>María Vega:</label>                                        
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </div>                             
                                </div><hr />                               
                                
                                
                                
                            </div>

                        </div>      

                    </div>


                    <!-- /. ROW  -->           
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <div class="footer">


            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>


        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="../assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="../assets/js/custom.js"></script>


    </body>
</html>

<?php
    session_start();
    $user = $_SESSION['user'];
    
?>

﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rutas CR</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href="../Styles/css/style.css" rel="stylesheet" />
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
        <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
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
                            <img src="../Images/logo.jpeg" width="80px" height="80px" alt="">
                        </a>
                    </div>

                    <span class="logout-spn" >
                        <a href="loginRegister.php" style="color:#fff;">Cerrar Sesión</a>  

                    </span>
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
<!--                        <li> 
                            <a href="index.php" ><i class="fa fa-desktop "></i>Inicio</a>
                        </li>-->
                        <?php
                            if($user->admin == 0){
                        ?>
                        <li>
                            <a href="./CreateRoute.php"><i class="fa fa-bar-chart-o"></i>Crear Ruta</a>
                        </li>
                        <li>
                            <a href="./ModifyRoute.php"><i class="fa fa-bar-chart-o"></i>Modificar Ruta</a>
                        </li>
                        <?php
                            }else{
                        ?>
                         <li>
                            <a href="./AddTouristicPlace.php"><i class="fa fa-bar-chart-o"></i>Agregar sitio turístico</a>
                        </li>
                        <li>
                            <a href="./CreateAdmin.php"><i class="fa fa-bar-chart-o"></i>Crear Administrador</a>
                        </li>
                        <li>
                            <a href="./DeleteAdmin.php"><i class="fa fa-bar-chart-o"></i>Eliminar Administrador</a>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>

            </nav>
        </div>

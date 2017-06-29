<?php
include_once '../Domain/CallAPI.php';
session_start();
if(isset($_POST["login"])){
    
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/login";
    
    $valores = array();
    $valores['userName'] = $_POST["txtUser"];
    $valores['userPassword'] = $_POST["txtPassword"];

    $data = json_encode($valores);
    $result = $callApi->callAPIMethod("POST",$url,$data);
    $user = json_decode($result);
    if(property_exists($user,'status')){
        header("location: ../PresentationAdmin/loginRegister.php?mensaje=1");
    }else{
        $_SESSION['user'] = $user;
        if($user->admin == 0){
            header("location: ../PresentationAdmin/CreateRoute.php");
        }else{
            header("location: ../PresentationAdmin/AddTouristicPlace.php");
        }
    }
   
}else if(isset ($_POST["register"])){
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/users";
    
    $valores = array();
    $valores['idUser'] = 0;
    $valores['fullName'] = $_POST["txtNombre"]." ".$_POST["txtLastName"];
    $valores['email'] = $_POST["txtEmail"];
    $valores['userName'] = $_POST["txtUser"];
    $valores['userPassword'] = $_POST["txtPassword"];
    $valores['admin'] = 0;

    $data = json_encode($valores);
    $result = $callApi->callAPIMethod("POST",$url,$data);
    $user = json_decode($result);
    $_SESSION['user'] = $user;
    header("location: ../PresentationAdmin/CreateRoute.php");
}


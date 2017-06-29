<?php

include_once '../Domain/CallAPI.php';
session_start();
if (isset($_POST["createRoute"])) {

    $nameRoute = $_POST['txtNameRoute'];
    $sites = $_POST["sites"];
    $user = $_SESSION["user"]->idUser;

    $arraySites = explode(";", $sites);
    $values = array();
    $values['routename'] = $nameRoute;
    $values['user'] = $user;
    $values['places'] = $arraySites;

    $data = json_encode($values);
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/predesignedroutes";
    $result = $callApi->callAPIMethod("POST", $url, $data);
    $results = json_decode($result);

    if ($results->status === "success") {
        header('location: ../PresentationAdmin/CreateRoute.php?success=success');
    } else {
        header('location: ../PresentationAdmin/CreateRoute.php?error=error');
    }
}else if(isset ($_POST['updateRoute'])){
    
    $idRoute = $_POST["idRoute"];
    $sites = $_POST["sites"];
    $user = $_SESSION["user"]->idUser;
    $nameRoute = $_POST["txtNameRoute"];
    
       $arraySites = explode(";", $sites);
    $values = array();
    $values['idPredesignedRoute'] = $idRoute;
    $values['routename'] = $nameRoute;
    $values['user'] = $user;
    $values['places'] = $arraySites;

    $data = json_encode($values);
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/predesignedroutes";
    $result = $callApi->callAPIMethod("PUT", $url, $data);
    $results = json_decode($result);

    if ($results->status === "success") {
        header('location: ../PresentationAdmin/ModifyRoute.php?success=success');
    } else {
        header('location: ../PresentationAdmin/ModifyRoute.php?error=error');
    }
    
}else if(isset ($_POST['idRoute'])){
    
    $idRoute = $_POST['idRoute'];    
    
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/predesignedroutes";
    $result = $callApi->callAPIMethod("DELETE", $url, $idRoute);
    $results = json_decode($result);

    if ($results['status'] === "success") {
        header('location: ../PresentationAdmin/ModifyRoute.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/ModifyRoute.php?errorDelete=error');
    }
    
    
}

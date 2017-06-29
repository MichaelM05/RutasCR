<?php

include_once '../Business/TouristicPlaceBusiness.php';
include '../Algotithms/BayesAlgoritmo.php';

if (isset($_POST['add'])) {
    
    $tpb = new TouristicPlaceBusiness();
    $variables = [
        array('id' => 'latitude', 'valor' => $_POST['lat']),
        array('id' => 'length', 'valor' => $_POST['leng']),
        array('id' => 'price', 'valor' => $_POST['cbPrice']),
    ];
    $typeActivity = bayes($variables);
    $touristicPlace = new TouristicPlace(0, $_POST['txtName'], $_POST['txtDescription'],
            $_POST['lat'], $_POST['leng'], $_POST['cbPrice'], $typeActivity);
    $result = $tpb->insertTBTouristicPlace($touristicPlace);
    
    if ($result == 1) {
        header('location: ../PresentationAdmin/AddTouristicPlace.php?success=success');
    } else {
        header('location: ../PresentationAdmin/AddTouristicPlace.php?error=dberror');
    }
}else if(isset ($_POST["deleteTouristic"])){
    
    $idTouristicPlace = $_POST["idSite"];
    $touristicBusiness = new TouristicPlaceBusiness();
    $result = $touristicBusiness->deleteTBTouristicPlace($idTouristicPlace);
    
    if($result){
        header('location: ../PresentationAdmin/DeletePlacesRoute.php?success=success');
    }else{
        header('location: ../PresentationAdmin/DeletePlacesRoute.php?error=error');
    }
            
    
    
}
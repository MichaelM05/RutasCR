<?php

include_once '../Data/PredesignedRouteData.php';

class PredesignedRouteBusiness {

    private $predesignedRouteData;
    
    function PredesignedRouteBusiness() {
        $this->predesignedRouteData = new PredesignedRouteData();
    }
    
    public function insertTBPredesignedRoute($predesignedRoute) {
        return $this->predesignedRouteData->insertTBPredesignedRoute($predesignedRoute);
    }

    public function updateTBPredesignedRoute($predesignedRoute) {
        return $this->predesignedRouteData->updateTBPredesignedRoute($predesignedRoute);
    }

    public function deleteTBPredesignedRoute($idPredesignedRoute) {
        return $this->predesignedRouteData->deleteTBPredesignedRoute($idPredesignedRoute);
    }

    public function getAllTBPredesignedRoutees() {
        return $this->predesignedRouteData->getAllTBPredesignedRoutees();
    }

    public function getPredesignedRouteByUser($idUser) {
        return $this->predesignedRouteData->getPredesignedRouteByUser($idUser);
    }
    
    public function getPredesignedRouteByName($routeName){
        return $this->predesignedRouteData->getPredesignedRouteByName($routeName);
    }
    
}

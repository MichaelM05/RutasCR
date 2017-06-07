<?php

include '../Data/PredesignedRouteData.php';

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

    public function getPredesignedRouteById($idPredesignedRoute) {
        return $this->predesignedRouteData->getPredesignedRouteById($idPredesignedRoute);
    }
    
}

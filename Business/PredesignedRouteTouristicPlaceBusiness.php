<?php

include_once '../Data/PredesignedRouteTouristicPlaceData.php';

class PredesignedRouteTouristicPlaceBusiness {
   
    private $predesignedRouteTouristicPlaceData;
    
    function PredesignedRouteTouristicPlaceBusiness(){
        $this->predesignedRouteTouristicPlaceData = new PredesignedRouteTouristicPlaceData();
    }
    
    public function insertTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace) {
        return $this->predesignedRouteTouristicPlaceData->insertTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace);
    }

    public function updateTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace) {
        return $this->predesignedRouteTouristicPlaceData->updateTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace);
    }

    public function deleteTBPredesignedRouteTouristicPlace($idPredesignedRouteTouristicPlace) {
        return $this->predesignedRouteTouristicPlaceData->deleteTBPredesignedRouteTouristicPlace($idPredesignedRouteTouristicPlace);
    }
    
    public function deleteTBPredesignedRouteTouristicPlaceByRoute($idRoute) {
        return $this->predesignedRouteTouristicPlaceData->deleteTBPredesignedRouteTouristicPlaceByRoute($idRoute);
    }

    public function getAllTBPredesignedRouteTouristicPlaces() {
        return $this->predesignedRouteTouristicPlaceData->getAllTBPredesignedRouteTouristicPlaces();
    }

    public function getPredesignedRouteTouristicPlaceByRoute($idRoute) {
        return $this->predesignedRouteTouristicPlaceData->getPredesignedRouteTouristicPlaceByRoute($idRoute);
    }
    
}

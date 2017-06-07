<?php

include_once '../Data/TouristicPlaceData.php';

class TouristicPlaceBusiness {

    private $touristicPlaceData;
    
    function TouristicPlaceBusiness() {
        $this->touristicPlaceData = new TouristicPlaceData();
    }

    public function insertTBTouristicPlace($touristicPlace) {
        return $this->touristicPlaceData->insertTBTouristicPlace($touristicPlace);
    }

    public function updateTBTouristicPlace($touristicPlace) {
        return $this->touristicPlaceData->updateTBTouristicPlace($touristicPlace);
    }

    public function deleteTBTouristicPlace($idTouristicPlace) {
        return $this->touristicPlaceData->deleteTBTouristicPlace($idTouristicPlace);
    }

    public function getAllTBTouristicPlacees() {
        return $this->touristicPlaceData->getAllTBTouristicPlacees();
    }

    public function getTouristicPlaceById($idTouristicPlace) {
        return $this->touristicPlaceData->getTouristicPlaceById($idTouristicPlace);
    }
    
    public function getTouristicPlaceByLocation($latitude, $length) {
        return $this->touristicPlaceData->getTouristicPlaceByLocation($latitude, $length);
    }
    
}

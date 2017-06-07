<?php

include '../Data/ImageTouristicPlaceData.php';

class ImageTouristicPlaceBusiness {

    private $imageTouristicPlaceData;
    
    function ImageTouristicPlaceBusiness() {
        $this->imageTouristicPlaceData =  new ImageTouristicPlaceData();;
    }

    public function insertTBImageTouristicPlace($imageTouristicPlace) {
        return $this->imageTouristicPlaceData->insertTBImageTouristicPlace($imageTouristicPlace);
    }

    public function updateTBImageTouristicPlace($imageTouristicPlace) {
        return $this->imageTouristicPlaceData->updateTBImageTouristicPlace($imageTouristicPlace);
    }

    public function deleteTBImageTouristicPlace($idImageTouristicPlace) {
        return $this->imageTouristicPlaceData->deleteTBImageTouristicPlace($idImageTouristicPlace);
    }

    public function getAllTBImageTouristicPlacees() {
        return $this->imageTouristicPlaceData->getAllTBImageTouristicPlacees();
    }

    public function getImageTouristicPlaceById($idImageTouristicPlace) {
        return $this->imageTouristicPlaceData->getImageTouristicPlaceById($idImageTouristicPlace);
    }
    
}

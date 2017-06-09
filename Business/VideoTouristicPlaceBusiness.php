<?php

include_once '../Data/VideoTouristicPlaceData.php';

class VideoTouristicPlaceBusiness {

    private $videoTouristicPlaceData;
    
    function VideoTouristicPlaceBusiness(){
        $this->videoTouristicPlaceData = new VideoTouristicPlaceData();
    }
    
    public function insertTBVideoTouristicPlace($videoTouristicPlace) {
        return $this->videoTouristicPlaceData->insertTBVideoTouristicPlace($videoTouristicPlace);
    }

    public function updateTBVideoTouristicPlace($videoTouristicPlace) {
        return $this->videoTouristicPlaceData->updateTBVideoTouristicPlace($videoTouristicPlace);
    }

    public function deleteTBVideoTouristicPlace($idVideoTouristicPlace) {
        return $this->videoTouristicPlaceData->deleteTBVideoTouristicPlace($idVideoTouristicPlace);
    }

    public function getAllTBVideoTouristicPlacees() {
        return $this->videoTouristicPlaceData->getAllTBVideoTouristicPlacees();
    }

    public function getVideoTouristicPlaceByPlace($idTouristicPlace) {
        return $this->videoTouristicPlaceData->getVideoTouristicPlaceByPlace($idTouristicPlace);
    }
        
    
}

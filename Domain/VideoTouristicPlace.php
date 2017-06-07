<?php

class VideoTouristicPlace {
    
    private $idVideoTouristicPlace;
    private $videoPath;
    private $touristicPlace;
    
    function VideoTouristicPlace($idVideoTouristicPlace, $videoPath, $touristicPlace) {
        $this->idVideoTouristicPlace = $idVideoTouristicPlace;
        $this->videoPath = $videoPath;
        $this->touristicPlace = $touristicPlace;
    }

    function getIdVideoTouristicPlace() {
        return $this->idVideoTouristicPlace;
    }

    function getVideoPath() {
        return $this->videoPath;
    }

    function getTouristicPlace() {
        return $this->touristicPlace;
    }

    function setIdVideoTouristicPlace($idVideoTouristicPlace) {
        $this->idVideoTouristicPlace = $idVideoTouristicPlace;
    }

    function setVideoPath($videoPath) {
        $this->videoPath = $videoPath;
    }

    function setTouristicPlace($touristicPlace) {
        $this->touristicPlace = $touristicPlace;
    }
    
}

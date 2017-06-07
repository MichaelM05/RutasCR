<?php


class ImageTouristicPlace {
    
    private $idImageTouristicPlace;
    private $imagePath;
    private $touristicPlace;
   
    function ImageTouristicPlace($idImageTouristicPlace, $imagePath, $touristicPlace) {
        $this->idImageTouristicPlace = $idImageTouristicPlace;
        $this->imagePath = $imagePath;
        $this->touristicPlace = $touristicPlace;
    }
    
    function getIdImageTouristicPlace() {
        return $this->idImageTouristicPlace;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function getTouristicPlace() {
        return $this->touristicPlace;
    }

    function setIdImageTouristicPlace($idImageTouristicPlace) {
        $this->idImageTouristicPlace = $idImageTouristicPlace;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function setTouristicPlace($touristicPlace) {
        $this->touristicPlace = $touristicPlace;
    }


    
   
}

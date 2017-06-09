<?php

class PredesignedRouteTouristicPlace {

    private $idPredesignedRouteTouristicPlace;
    private $route;
    private $touristicPlace;
    
    function PredesignedRouteTouristicPlace($idPredesignedRouteTouristicPlace, $route, $touristicPlace) {
        $this->idPredesignedRouteTouristicPlace = $idPredesignedRouteTouristicPlace;
        $this->route = $route;
        $this->touristicPlace = $touristicPlace;
    }

    function getIdPredesignedRouteTouristicPlace() {
        return $this->idPredesignedRouteTouristicPlace;
    }

    function getRoute() {
        return $this->route;
    }

    function getTouristicPlace() {
        return $this->touristicPlace;
    }

    function setIdPredesignedRouteTouristicPlace($idPredesignedRouteTouristicPlace) {
        $this->idPredesignedRouteTouristicPlace = $idPredesignedRouteTouristicPlace;
    }

    function setRoute($route) {
        $this->route = $route;
    }

    function setTouristicPlace($touristicPlace) {
        $this->touristicPlace = $touristicPlace;
    }


    
}

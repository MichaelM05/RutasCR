<?php

class PredesignedRoute {

    private $idPredesignedRoute;
    private $namePredesignedRoute;
    private $user;
    
    function PredesignedRoute($idPredesignedRoute, $namePredesignedRoute, $user) {
        $this->idPredesignedRoute = $idPredesignedRoute;
        $this->namePredesignedRoute = $namePredesignedRoute;
        $this->user = $user;
    }

    function getIdPredesignedRoute() {
        return $this->idPredesignedRoute;
    }

    function getNamePredesignedRoute() {
        return $this->namePredesignedRoute;
    }

    function getUser() {
        return $this->user;
    }

    function setIdPredesignedRoute($idPredesignedRoute) {
        $this->idPredesignedRoute = $idPredesignedRoute;
    }

    function setNamePredesignedRoute($namePredesignedRoute) {
        $this->namePredesignedRoute = $namePredesignedRoute;
    }

    function setUser($user) {
        $this->user = $user;
    }


}

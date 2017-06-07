<?php

class TouristicPlace {

    private $idTouristicPlace;
    private $nameTouristicPlace;
    private $descriptionTouristicPlace;
    private $latitude;
    private $length;
    private $price;
    private $typeActivity;

    function TouristicPlace($idTouristicPlace, $nameTouristicPlace, $descriptionTouristicPlace, $latitude, $length, $price, $typeActivity) {
        $this->idTouristicPlace = $idTouristicPlace;
        $this->nameTouristicPlace = $nameTouristicPlace;
        $this->descriptionTouristicPlace = $descriptionTouristicPlace;
        $this->latitude = $latitude;
        $this->length = $length;
        $this->price = $price;
        $this->typeActivity = $typeActivity;
    }

    function getIdTouristicPlace() {
        return $this->idTouristicPlace;
    }

    function getNameTouristicPlace() {
        return $this->nameTouristicPlace;
    }

    function getDescriptionTouristicPlace() {
        return $this->descriptionTouristicPlace;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLength() {
        return $this->length;
    }

    function getPrice() {
        return $this->price;
    }

    function getTypeActivity() {
        return $this->typeActivity;
    }

    function setIdTouristicPlace($idTouristicPlace) {
        $this->idTouristicPlace = $idTouristicPlace;
    }

    function setNameTouristicPlace($nameTouristicPlace) {
        $this->nameTouristicPlace = $nameTouristicPlace;
    }

    function setDescriptionTouristicPlace($descriptionTouristicPlace) {
        $this->descriptionTouristicPlace = $descriptionTouristicPlace;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLength($length) {
        $this->length = $length;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setTypeActivity($typeActivity) {
        $this->typeActivity = $typeActivity;
    }


    
}

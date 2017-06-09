<?php

include_once '../Business/TouristicPlaceBusiness.php';
include_once '../Business/VideoTouristicPlaceBusiness.php';
include_once '../Business/ImageTouristicPlaceBusiness.php';
include_once '../Algotithms/SearchAlgorithm.php';

class TouristicPlaceAPI {

    public function API() {
        header('Content-Type: application/JSON');
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                break;
            case 'POST'://inserta
                if($_GET['action'] == 'touristicplaces') {
                    $this->getToursiticPlaceByLocation();
                } else if ($_GET['action'] == 'searchtouristicplaces') {
                    $this->getPlaces();
                }
                break;
            case 'PUT'://actualiza
                echo 'PUT';
                break;
            case 'DELETE'://elimina
                echo 'DELETE';
                break;
            default://metodo NO soportado
                echo 'METODO NO SOPORTADO';
                break;
        }
    }
    
    function getPlaces() {
        if ($_GET['action'] == 'searchtouristicplaces') {
            $ipb = new ImageTouristicPlaceBusiness();
            $vpb = new VideoTouristicPlaceBusiness();
            $tpb = new TouristicPlaceBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->activity, $obj->price, $obj->duration, $obj->distance, $obj->initPoint)){
                $result = getPlaces($obj->activity, $obj->price, $obj->duration, $obj->distance, $obj->initPoint);
                if (!is_null($result)) {
                        $places = [];
                        foreach ($result as $place) {
                            $images = $ipb->getImageTouristicPlaceByPlace($place->getIdTouristicPlace());
                            $videos = $vpb->getVideoTouristicPlaceByPlace($place->getIdTouristicPlace());
                            echo json_encode($this->toArray($place, $images, $videos), JSON_PRETTY_PRINT);
                        }
                    echo json_encode($places, JSON_PRETTY_PRINT);
                } else {
                    $this->response(200, "error", "not found routes");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400, "Error", "Error");
        }
    }

    function toArrayTP($touristicPlace) {
        $touristicPlaceArray = array(
            'idTouristicPlace' => $touristicPlace->getIdTouristicPlace(),
            'nameTouristicPlace' => $touristicPlace->getNameTouristicPlace(),
            'descriptionTouristicPlace' => $touristicPlace->getDescriptionTouristicPlace(),
            'latitude' => $touristicPlace->getLatitude(),
            'length' => $touristicPlace->getLength(),
            'price' => $touristicPlace->getPrice(),
            'typeActivity' => $touristicPlace->getTypeActivity());
        return $touristicPlaceArray;
    }
    
    function getToursiticPlaceByLocation() {
        if ($_GET['action'] == 'touristicplaces') {
            $tpb = new TouristicPlaceBusiness();
            $ipb = new ImageTouristicPlaceBusiness();
            $vpb = new VideoTouristicPlaceBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->latitude, $obj->length)){
                $result = $tpb->getTouristicPlaceByLocation($obj->latitude, $obj->length);
                if (!is_null($result)) {
                    $images = $ipb->getImageTouristicPlaceByPlace($result->getIdTouristicPlace());
                    $videos = $vpb->getVideoTouristicPlaceByPlace($result->getIdTouristicPlace());
                    echo json_encode($this->toArray($result, $images, $videos), JSON_PRETTY_PRINT);
                } else {
                    $this->response(200, "error", "not found touristic place");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }

    function toArray($touristicPlace, $images, $videos) {
        $imagesArray = [];
        $videosArray = [];
        foreach ($images as $currentImage) {
            array_push($imagesArray, $currentImage->getImagePath());
        }
        foreach ($videos as $currentVideo) {
            array_push($videosArray, $currentVideo->getVideoPath());
        }
        $touristicPlaceArray = array(
            'idTouristicPlace' => $touristicPlace->getIdTouristicPlace(),
            'nameTouristicPlace' => $touristicPlace->getNameTouristicPlace(),
            'descriptionTouristicPlace' => $touristicPlace->getDescriptionTouristicPlace(),
            'latitude' => $touristicPlace->getLatitude(),
            'length' => $touristicPlace->getLength(),
            'price' => $touristicPlace->getPrice(),
            'typeActivity' => $touristicPlace->getTypeActivity(),
            'images' => $imagesArray,
            'videos' => $videosArray);
        return $touristicPlaceArray;
    }

    function response($code, $status, $message) {
        http_response_code($code);
        if (!empty($status) && !empty($message)) {
            $response = array("status" => $status, "message" => $message);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

}

$touristicPlaceAPI = new TouristicPlaceAPI();
$touristicPlaceAPI->API();

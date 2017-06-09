<?php

include_once '../Business/TouristicPlaceBusiness.php';
include_once '../Algotithms/SearchAlgorithm.php';

class RoutesAPI {

    public function API() {
        header('Content-Type: application/JSON');
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                echo 'GET';
                break;
            case 'POST'://inserta
                $this->getRoutes();
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
    
    function getRoutes() {
        if ($_GET['action'] == 'routes') {
            $tpb = new TouristicPlaceBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->activity, $obj->price, $obj->duration, $obj->distance, $obj->initPoint)){
                $result = getRoutes($obj->activity, $obj->price, $obj->duration, $obj->distance, $obj->initPoint);
                if (!is_null($result)) {
                    $routes = [];
                    foreach ($result as $current) {
                        $places = [];
                        foreach ($current as $place) {
                            $currentPlace = $this->toArray($place);
                            array_push($places, $currentPlace);
                        }
                        array_push($routes, $places);
                    }
                    echo json_encode($routes, JSON_PRETTY_PRINT);
                } else {
                    $this->response(200, "error", "not found routes");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }

    function toArray($touristicPlace) {
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

    function response($code, $status, $message) {
        http_response_code($code);
        if (!empty($status) && !empty($message)) {
            $response = array("status" => $status, "message" => $message);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

}

$routesAPI = new RoutesAPI();
$routesAPI->API();

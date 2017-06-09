<?php

include_once '../Business/TouristicPlaceBusiness.php';
include_once '../Business/VideoTouristicPlaceBusiness.php';
include_once '../Business/ImageTouristicPlaceBusiness.php';
include_once '../Business/PredesignedRouteBusiness.php';
include_once '../Business/PredesignedRouteTouristicPlaceBusiness.php';

class PredesignedRoutesAPI {

    public function API() {
        header('Content-Type: application/JSON');
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                $this->getAllPredesignedRoutes();
                break;
            case 'POST'://inserta
                $this->insertPredesignedRoute();
                break;
            case 'PUT'://actualiza
                $this->updatePredesignedRoute();
                break;
            case 'DELETE'://elimina
                $this->deletePredesignedRoute();
                break;
            default://metodo NO soportado
                echo 'METODO NO SOPORTADO';
                break;
        }
    }
    
    function insertPredesignedRoute() {
        if ($_GET['action'] == 'predesignedroutes') {
            $prb = new PredesignedRouteBusiness();
            $prtpb = new PredesignedRouteTouristicPlaceBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->routename, $obj->user, $obj->places)) {
                $predesignedRoute = new PredesignedRoute(0, $obj->routename, $obj->user);
                $result = $prb->insertTBPredesignedRoute($predesignedRoute);
                if ($result == 1) {
                    $places = $obj->places;
                    $idRoute = $prb->getPredesignedRouteByName($obj->routename);
                    foreach ($places as $place) {
                        $predesignedRouteTouristicPlace = 
                                new PredesignedRouteTouristicPlace(0, $idRoute, $place);
                        $prtpb->insertTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace);
                    }
                    $this->response(200, "success", "new record added");
                } else {
                    $this->response(200, "error", "not record added");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }
    
    function getAllPredesignedRoutes() {
        $prb = new PredesignedRouteBusiness();
        if ($_GET['action'] == 'predesignedroutes') {
            if (isset($_GET['id'])) {                
                
            } else { //muestra todos los registros                   
                $routes = $prb->getAllTBPredesignedRoutees();
                $routesArray = $this->getPlacesPredesignedRoutes($routes);
                echo json_encode($routesArray, JSON_PRETTY_PRINT);
            }
        } else {
            $this->response(400);
        }
    }
    
    function getPlacesPredesignedRoutes ($routes) {
        $touristicPlaceBusiness = new TouristicPlaceBusiness();
        $prtpb = new PredesignedRouteTouristicPlaceBusiness();
        $ipb = new ImageTouristicPlaceBusiness();
        $vpb = new VideoTouristicPlaceBusiness();
        $routesArray = [];
        foreach ($routes as $route) {
            $placesArray = [];
            $places = $prtpb->getPredesignedRouteTouristicPlaceByRoute(
                    $route->getIdPredesignedRoute());
            foreach ($places as $currentPlace) {
                $touristicPlace = $touristicPlaceBusiness->getTouristicPlaceById($currentPlace->getTouristicPlace());
                $images = $ipb->getImageTouristicPlaceByPlace($touristicPlace->getIdTouristicPlace());
                $videos = $vpb->getVideoTouristicPlaceByPlace($touristicPlace->getIdTouristicPlace());
                $placeArray = $this->toArrayTouristicPlace($touristicPlace, $images, $videos);
                array_push($placesArray, $placeArray);
            }
            $routeArray = $this->toArrayRoute($route, $placesArray);
            array_push($routesArray, $routeArray);
        }
        return $routesArray;
    }
    
    public function updatePredesignedRoute() {
        if ($_GET['action'] == 'predesignedroutes') {
            $prb = new PredesignedRouteBusiness();
            $prtpb = new PredesignedRouteTouristicPlaceBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->idPredesignedRoute, $obj->routename, $obj->user, $obj->places)) {
                $predesignedRoute = new PredesignedRoute($obj->idPredesignedRoute, $obj->routename, $obj->user);
                $result = $prb->updateTBPredesignedRoute($predesignedRoute);
                if ($result == 1) {
                    $prtpb->deleteTBPredesignedRouteTouristicPlaceByRoute($obj->idPredesignedRoute);
                    $places = $obj->places;
                    foreach ($places as $place) {
                        $predesignedRouteTouristicPlace = 
                                new PredesignedRouteTouristicPlace(0, $obj->idPredesignedRoute, $place);
                        $prtpb->insertTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace);
                    }
                    $this->response(200, "success", "new record updated");
                } else {
                    $this->response(200, "error", "not record update");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }

        public function deletePredesignedRoute() {
        $prb = new PredesignedRouteBusiness();
        $prtpb = new PredesignedRouteTouristicPlaceBusiness();
        if ($_GET['action'] == 'predesignedroutes') {
            if (isset($_GET['id'])) {                
                $prtpb->deleteTBPredesignedRouteTouristicPlaceByRoute($_GET['id']);
                $result = $prb->deleteTBPredesignedRoute($_GET['id']);
                if($result == 1) {
                    $this->response(200, "success", "new record deleted");  
                } else {
                    $this->response(200, "error", "not record deleted");
                }
            }
        } else {
            $this->response(400);
        }
    }
    
    function toArrayTouristicPlace($touristicPlace, $images, $videos) {
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
    
    function toArrayRoute($predesignedRoute, $places) {
        $routeArray = array(
            'routeName' => $predesignedRoute->getNamePredesignedRoute(),
            'user' => $predesignedRoute->getUser(),
            'places' => $places
        );
        return $routeArray;
    }
    
    function response($code, $status, $message) {
        http_response_code($code);
        if (!empty($status) && !empty($message)) {
            $response = array("status" => $status, "message" => $message);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

}

$predesignedRoutesAPI = new PredesignedRoutesAPI();
$predesignedRoutesAPI->API();
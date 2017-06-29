<?php
include_once '../Domain/CallAPI.php';

if (isset($_POST["searchPre"])) {

    $price = $_POST["cbPrice"];
    $duration = $_POST["cbDuration"];
    $activity = $_POST["cbActivity"];
    $distance = $_POST["cbDistance"];
    $going = $_POST["cbGoing"];
    $lat = 0;
    $leng = 0;

    if ($going === "Mi ubicación") {
        $lat = $_POST["lat"];
        $leng = $_POST["leng"];
    } else {
        switch ($going) {
            case "Cartago":
                $lat = "9.862251741694937";
                $leng = "-83.91546249389648";
                break;
            case "San José":
                $lat = "9.915826049729528";
                $leng = "-84.06944274902344";
                break;
            case "Limón":
                $lat = "9.98805634887536";
                $leng = "-83.04376602172852";
                break;
            case "Heredia":
                $lat = "10.0023600";
                $leng = "-84.1165100";
                break;
            case "Puntarenas":
                $lat = "9.9762500";
                $leng = "-84.8383600";
                break;
            case "Guanacaste":
                $lat = "10,4958";
                $leng = "-85,355";
                break;
            case "Alajuela":
                $lat = "10.0162500";
                $leng = "-84.2116300";
                break;
        }
    }
    
    $values = array();
    $values['price'] = $price;
    $values['activity'] = $activity;
    $values['duration'] = $duration;
    $values['distance'] = $distance;
    $values['initPoint'] = $lat.",".$leng;    
    
    echo $data = json_encode($values);  
    $callApi = new CallAPI();
    $url = "http://rutascr.esy.es/WebServices/searchtouristicplaces";  
    $result = $callApi->callAPIMethod("POST", $url, $data);
    $routes = json_decode($result);
    
    echo $routes;
    
}    
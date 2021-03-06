<?php

include(dirname(__FILE__) . "/EuclidesAlgorithm.php");
include(dirname(__FILE__) . "/CombinationsAlgorithm.php");
include(dirname(__FILE__) . "/BayesAlgoritmo.php");
include_once '../Domain/TouristicPlace.php';
include_once '../Business/TouristicPlaceBusiness.php';

function getRoutes($activity, $price, $duration, $distance, $initPoint) {

    $activityValues = ["Cultural" => 1,
        "Montaña" => 2,
        "Ecológico" => 3,
        "Recreativo" => 4];
    $priceValues = ["$0 - $5" => 1,
        "$5 - $10" => 2,
        "$10 - $20" => 3,
        "$20 - $30" => 4,
        "$30 o más" => 5];
    $durationValues = ["1 - 2 Horas" => 2,
        "2 - 4 Horas" => 4,
        "4 - 6 Horas" => 6,
        "6 - 8 Horas" => 8,
        "8 0 más Horas" => 0];
    $distanceValues = ["1 - 2 Km" => 2,
        "2 - 4 Km" => 4,
        "4 - 6 Km" => 6,
        "6 - 8 Km" => 8,
        "8 0 más Km" => 0];


    $tpb = new TouristicPlaceBusiness();
    $places = $tpb->getAllTBTouristicPlacees();

    $vectorA = array(
        'price' => $priceValues[$price],
        'duration' => $durationValues[$duration],
        'activity' => $activityValues[$activity],
        'distance' => $distanceValues[$distance]);

    $variables = ['price', 'activity', 'duration', 'distance'];

    $placesReturn = euclides($vectorA, $places, $variables, $initPoint);

    $combinations = genCombinations($placesReturn, sizeof($placesReturn));
    
    if (sizeof($combinations) > 10) {
        $combinations = array_slice($combinations, 0, 10);
    }
    
    $tpb = new TouristicPlaceBusiness();
    
    $routes = [];
    
    $location = explode(",", $initPoint);
    
    $initPlace = new TouristicPlace(0, "Origen", "", $location[0], $location[1], "", "");
    
    foreach ($combinations as $currentCombination) {
        $places = [];
        array_push($places, $initPlace);
        foreach ($currentCombination as $currentPlace) {
            $place = $tpb->getTouristicPlaceById($currentPlace);
            array_push($places, $place);
        }
        array_push($routes, $places);
    }
    
    return $routes;
    
}

function getPlaces($activity, $price, $duration, $distance, $initPoint) {

    $activityValues = ["Cultural" => 1,
        "Montaña" => 2,
        "Ecológico" => 3,
        "Recreativo" => 4];
    $priceValues = ["$0 - $5" => 1,
        "$5 - $10" => 2,
        "$10 - $20" => 3,
        "$20 - $30" => 4,
        "$30 o más" => 5];
    $durationValues = ["1 - 2 Horas" => 2,
        "2 - 4 Horas" => 4,
        "4 - 6 Horas" => 6,
        "6 - 8 Horas" => 8,
        "8 0 más Horas" => 0];
    $distanceValues = ["1 - 2 Km" => 2,
        "2 - 4 Km" => 4,
        "4 - 6 Km" => 6,
        "6 - 8 Km" => 8,
        "8 0 más Km" => 0];


    $tpb = new TouristicPlaceBusiness();
    $places = $tpb->getAllTBTouristicPlacees();

    $vectorA = array(
        'price' => $priceValues[$price],
        'duration' => $durationValues[$duration],
        'activity' => $activityValues[$activity],
        'distance' => $distanceValues[$distance]);

    $variables = ['price', 'activity', 'duration', 'distance'];

    $placesReturn = euclides($vectorA, $places, $variables, $initPoint);

    $tpb = new TouristicPlaceBusiness();
    
    $places = [];
    
    foreach ($placesReturn as $cplace) {
            $place = $tpb->getTouristicPlaceById($cplace);
            array_push($places, $place);
    }
    
    return $places;
    
}
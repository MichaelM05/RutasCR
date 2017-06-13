<?php

function euclides($vectorA, $registrosBaseDatos, $variables, $initPoint) {

    $dest = "";
    foreach ($registrosBaseDatos as $registroActual) {
        $dest = $dest . $registroActual->getLatitude() . ',' . $registroActual->getLength() . '|';
    }
    $dest = substr($dest, 0, strlen($dest) - 1);

    $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=' .
            $initPoint . '&destinations=' . $dest . '&language=es&key=';
    $obj = json_decode(file_get_contents($url));
    $objArr = (array) $obj;


    $rows = (array) $objArr['rows'];
    $rows = (array) $rows[0];
    $elements = (array) $rows['elements'];

    $diferencias = [];

    foreach ($registrosBaseDatos as $registroActual) {
        $vectorB = array();
        //Se forma el vectorB
        foreach ($variables as $variableActual) {
            if (strcmp($variableActual, "distance") == 0) {
                $element = (array) $elements[$registroActual->getIdTouristicPlace() - 1];
                $distance = (array) $element['distance'];
                $vectorB[$variableActual] = ($distance['value'] / 1000);
            } else if (strcmp($variableActual, "duration") == 0) {
                $element = (array) $elements[$registroActual->getIdTouristicPlace() - 1];
                $duration = (array) $element['duration'];
                $vectorB[$variableActual] = ($duration['value'] / 3600);
            } else if (strcmp($variableActual, "price") == 0) {
                $vectorB[$variableActual] = $registroActual->getPrice();
            } else if (strcmp($variableActual, "activity") == 0) {
                $vectorB[$variableActual] = $registroActual->getTypeActivity();
            }
        }

        $diferencia = 0;
        //Se lleva a cabo la sumatoria de las diferencias ((Bi - Ai)^2) entre cada uno de los puntos de 
        //los vectores A y B
        foreach ($variables as $variableActual) {
            $diferencia += pow(($vectorB[$variableActual] - $vectorA[$variableActual]), 2);
        }
        
        //Se obtiene la raiz cuadrada de las diferencias obtenidas
        $diferencia = sqrt($diferencia);
        $val = ['id' => $registroActual->getIdTouristicPlace(),
                'diferencia' => $diferencia];
        array_push($diferencias, $val);
    }
    
    $diferencias = orderArray($diferencias, 'diferencia');
    
    $diferencias = array_slice($diferencias, 0, 7);
      

    $diferencias = getId($diferencias);
    
    return $diferencias;
    
}

function orderArray ($arrayToOrder, $field) {
    $pos = array();
    $newVar = array();
    foreach ($arrayToOrder as $key => $row) {
            $pos[$key]  = $row[$field];
            $newVar[$key] = $row;
    }
    asort($pos);
    $returnArray = array();
    foreach ($pos as $key => $pos) {     
        $returnArray[] = $newVar[$key];
    }
    return $returnArray;
}

function getId ($array) {
    $returnArray = array();
    foreach ($array as $currentArray) {
        array_push($returnArray, $currentArray['id']);
    }
    
    return $returnArray;
}

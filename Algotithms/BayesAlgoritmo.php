<?php

include_once '../Business/TouristicPlaceBusiness.php';

/**
 * El presente método se encarga de seleccionar la clase que tenga mayor 
 *   probabilidad de ser según las probabilidades calculadas a partir de
 *   los datos ingresados por el usuario.
 * @param type $clases: Posibles clases a adivinar por medio del Algoritmo.
 * @param type $variables: Valores que se tomaran en cuenta para el procesamiento
 *   y cálculo de las probabilidades.
 * @param type $registros: Registros de la base de datos que se van a utilizar.
 * @param type $clase: Clase objetivo, clase que se desea adivinar.
 * @return type: Retorna clase más probabilidad de ser.
 */
function bayes($variables) {

    $clases = ["Cultural", "Montaña", "Ecológico", "Recreativo"];
    $clase = "typeActivity";
    $tpb = new TouristicPlaceBusiness();
    $registros = $tpb->getAllTBTouristicPlacees();
    $registros = convertRegisterToArray($registros);

    //Arreglo en el que se irán guardando las probabilidades de cada una de las 
    //clases.
    $probabilidadesClase = [];

    //Se recorren cada una de las clases
    foreach ($clases as $claseActual) {
        //Cantidad instancia de la clase
        $n = 0;

        //Constante cantidad de variables
        $m = sizeof($variables);

        //Se obtiene, cantidad instancias de cada clase
        foreach ($registros as $registroActual) {
            if (strcmp(trim(strtolower($registroActual[$clase])), trim(strtolower($claseActual))) == 0) {
                $n += 1;
            }
        }
        $probabilidadTotal = 1;
        //Se recorren cada una de las variables para obtener las probabilidades de
        //cada variable para cada una de las clases recorridas en el cicl externo.
        foreach ($variables as $variableActual) {
            //Cantidad instancias atributo en cada clase
            $nc = 0;
            //Guardaran valores de cada atributo para luego calcular la probabilidad
            //estimada
            $valores = [];
            foreach ($registros as $registroActual) {
                if (strcmp(trim(strtolower($registroActual[$clase])), trim(strtolower($claseActual))) == 0 &&
                        strcmp(trim(strtolower($registroActual[$variableActual['id']])), trim(strtolower($variableActual['valor']))) == 0) {
                    //Aumenta instancia cada atributo
                    $nc += 1;
                }
                array_push($valores, $registroActual[$variableActual['id']]);
            }
            $valoresDistintos = array_count_values($valores);
            //Probabilidad estimada cada atributo en cada clase
            $p = 1 / sizeof($valoresDistintos);
            //Calcula probabilidad con base en la formula de bayes propuesta en el documento.
            $probabilidad = ($nc + ($m * $p)) / ($n + $m);
            $probabilidadTotal *= $probabilidad;
        }

        //Calcula probabilidad correspondiente.
        $probabilidadCorrespondiente = $n / sizeof($registros);

        //Se guardan las probabilidades de la clase.
        //clase = clase analizada
        //probabilidadAtributos = probabilidad derivada  de la fórmula.
        //probabilidadCorrespondiente = probabilidad calculada a partir del 
        //n y los registros.
        //probabilidadFinal = $probabilidadTotal * $probabilidadCorrespondiente
        $probabilidadClase = array(
            'clase' => $claseActual,
            'probabilidadAtributos' => $probabilidadTotal,
            'probabilidadCorrespondiente' => $probabilidadCorrespondiente,
            'probabilidadFinal' => $probabilidadTotal * $probabilidadCorrespondiente);

        array_push($probabilidadesClase, $probabilidadClase);
    }

    //Se obtiene la probabilidad con mayor valor.
    $claseResultado = maximo($probabilidadesClase);

    return $claseResultado;
}

/**
 * Método que se encarga de obtener la probabilidad máxima.
 * @param type $probabilidadesClase: Arreglo con las probabilidad de cada
 *   una de las clases.
 * @return type: Clase mayor probabilidad.
 */
function maximo($probabilidadesClase) {
    $claseResultado = "";
    $max = 0;
    foreach ($probabilidadesClase as $currentProbabilidad) {
        if ($currentProbabilidad['probabilidadFinal'] > $max) {
            $claseResultado = $currentProbabilidad['clase'];
            $max = $currentProbabilidad['probabilidadFinal'];
        }
    }
    return $claseResultado;
}

function convertRegisterToArray($registers) {
    $registersToReturn = [];
    foreach ($registers as $currentRegister) {
        $register = array('idTouristicPlace' => $currentRegister->getIdTouristicPlace(),
            'nameTouristicPlace' => $currentRegister->getNameTouristicPlace(),
            'descriptionTouristicPlace' => $currentRegister->getDescriptionTouristicPlace(),
            'latitude' => $currentRegister->getLatitude(),
            'length' => $currentRegister->getLength(),
            'price' => $currentRegister->getPrice(),
            'typeActivity' => $currentRegister->getTypeActivity());
        array_push($registersToReturn, $register);
    }
    return $registersToReturn;
}
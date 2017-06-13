<?php

function genCombinations($values, $count = 0) {

    $permCount = pow(count($values), $count);
    
    $comb = [];

    for ($i = 0; $i < $permCount; $i++) {
        $current = getCombination($values, $count, $i);
        if (sizeof($current) == $count) {
            array_push($comb, $current);
        }
    }

    return $comb;
}

function getCombination($values, $count, $index) {
    $result = array();
    for ($i = 0; $i < $count; $i++) {

        $pos = $index % count($values);

        if (!in_array($values[$pos], $result)) {
            $result[] = $values[$pos];
        }

        $index = ($index - $pos) / count($values);
        ;
    }
    return $result;
}

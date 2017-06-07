<?php

//$chars = array('a', 'b', 'c');
//$count = sizeof($chars);
//
//$generator = genCombinations($chars, $count);

//foreach ($generator as $value) {
//    // Do something with the value here
//    echo print_r($value) . "<br><br><br>";
//}

function genCombinations($values, $count = 0) {
    // Figure out how many combinations are possible:
    $permCount = pow(count($values), $count);
    
    $comb = [];

    // Iterate and yield:
    for ($i = 0; $i < $permCount; $i++) {
        $current = getCombination($values, $count, $i);
        if (sizeof($current) == $count) {
            array_push($comb, $current);
        }
    }

    return $comb;
}

// State-based way of generating combinations:
function getCombination($values, $count, $index) {
    $result = array();
    for ($i = 0; $i < $count; $i++) {
        // Figure out where in the array to start from, given the external state and the internal loop state
        $pos = $index % count($values);

        // Append and continue
        if (!in_array($values[$pos], $result)) {
            $result[] = $values[$pos];
        }

        $index = ($index - $pos) / count($values);
        ;
    }
    return $result;
}

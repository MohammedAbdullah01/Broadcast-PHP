<?php

/*
    - Implement Built Function => min()
    - Write a PHP Function To get max Number In Array 
*/

$arrayNum = [0, 6, 9, 8, 2, 5, 6, 3, 1, 100, 4, 7, 8, 9, 8, -3, -2, 21, 3];
$arr = [];

/**
 * @param array $array
 * @return mixed
 */

function getMaxNumber(array $array): mixed
{
    if (empty($array)) {

        return "This Array Is Empty :(";
    } else
        $maxNumber = $array[0];

    foreach ($array as $value) :

        if ($maxNumber < $value) :
            $maxNumber = $value;
        endif;

    endforeach;

    return $maxNumber;
}

echo getMaxNumber($arrayNum);

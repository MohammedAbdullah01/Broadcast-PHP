<?php

/*
    - Implement Built Function => min()
    - Write a PHP Function To get Minimum Number In Array 
*/

$arrayNum = [0, 6, 9, 8, 2, 5, 6, 3, 1, 4, 7, 8, 9, 8, -3, -2, 21, 3];
$arr = [];

/**
 * @param array $array
 * @return mixed
 */

function getMinimunNumber(array $array): mixed
{
    if (empty($array)) {

        return "This Array Is Empty :(";
    } else 
        $minimumNumber = $array[0];

    foreach ($array as $value) :

        if ($minimumNumber > $value) :
            $minimumNumber = $value;
        endif;

    endforeach;

    return $minimumNumber;
}

echo getMinimunNumber($arrayNum);

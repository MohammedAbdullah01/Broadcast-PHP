
<?php

/*
1- Write a PHP function to return an array whose key is its value and value How many value number has been repeated   
 */

/**
 * @param array $array
 * @return array
 */

$leatters = ['a', 'b', "A", 'c', 'd', 'a', 'e', 'f', 'j', 'k', 'd', 'a', "a"];
$numbers = [10, 2, 3, 5, 4, 3, 10, 1, 6, 5, 1, 6, 10];

function getCountOfEachValueRepeated(array $array): array
{

    for ($arr = 0; $arr < count($array); $arr++) {
        $count_values = array();

        foreach ($array as $a) {

            @$count_values[$a]++;

        }
    }
    return $count_values;
}

echo "<pre>";
print_r(getCountOfEachValueRepeated($leatters));
echo "</pre>";
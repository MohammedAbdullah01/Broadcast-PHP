
<?php

/*
1- Write a PHP Function To Count The Total Number Of Times a Specific Value Appears In An Array.
 */

/**
 * @param array $array
 * @param int|string $value
 * @return int
 */

$leatters = ['a', 'b', 'c', 'd', 'a', 'e', 'f', 'j', 'k', 'd', 'a'];
$numbers = [1, 2, 3, 5, 4, 3, 2, 1, 6, 5, 1];

function getCountOfRepeatedNumber(array $array, int | string $value): int
{
    $counter = 0;

    foreach ($array as $a) {
        ($a == $value) ? $counter++ : 0;
    }
    return $counter;
}

echo getCountOfRepeatedNumber($leatters, 'a') . "<br>"; // 3

echo getCountOfRepeatedNumber($leatters, 'b') . "<br>"; // 1

echo getCountOfRepeatedNumber($leatters, '1') . "<br>"; // 0

echo getCountOfRepeatedNumber($numbers, '6')  . "<br>"; // 1

echo getCountOfRepeatedNumber($numbers, 1)    . "<br>"; // 3

echo getCountOfRepeatedNumber($numbers, 5)    . "<br>"; // 2

echo getCountOfRepeatedNumber($numbers, 500)  . "<br>"; // 0

<?php

/*
- Use Cli
- Write a PHP Function To Get The Factorial Number
 */

/**
 * @param int $number
 * @return int
 */
function getFactorialNumber(int $number): int
{
    $result = 1;

    for ($i = $number; $i >= 1; $i--):
        $result = $result * $i;
    endfor;

    return $result;
}

echo getFactorialNumber(5);
/*
-------------
OutPut
-------------
120
 */

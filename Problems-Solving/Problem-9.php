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

// OR Concept Requrgan => Return Function In Function
/**
 * @param int $number
 * @return int
 */
function getFactorialNumberTwo(int $number): int
{
    if ($number == 1):
        return true;
    endif;
    return $number * getFactorialNumberTwo($number - 1);
}

echo getFactorialNumber(5) . "\n"; // 120

echo getFactorialNumberTwo(5); // 120

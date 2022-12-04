<?php

/*
    - Write a Script To Add All The Integers Between 2 Random Numbers And Display The Sum 
        If The Numbers Is Not Odd.

        - Loops
        - Operators
        - Variables
        - Conditions
*/

$sum = 0;
$startNumber = rand(1, 10);
$endNumber   = rand(20, 30);

for ($i = $startNumber; $i <= $endNumber; $i++) {

    if ($i % 2 === 0) {
        $sum += $i;
        echo "Even Number => $i \n";
    }
}
echo "Start Number  => {$startNumber} \n";
echo "End Number    => {$endNumber} \n";
echo "Total Numbers => {$sum} \n";

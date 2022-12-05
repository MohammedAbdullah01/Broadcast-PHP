<?php

/*
-
 */

for ($i = 1; $i <= 100; $i++):
    if ($i % 3 == 0 && $i % 5 == 0) 
    {
        echo "$i => Three And Five \n";
    } 
    elseif ($i % 3 == 0) 
    {
        echo "$i => Three \n";
    } 
    elseif ($i % 5 == 0) 
    {
        echo "$i => Five \n";
    }
endfor;


/** 
 * -------
 * OutPut
 * -------
 * 3 => Three
 * 5 => Five
 * 6 => Three
 * 9 => Three
 * 10 => Five
 * 12 => Three
 * 15 => Three And Five
 * 18 => Three
 * 20 => Five
 * 21 => Three
 * 24 => Three
 * 25 => Five
 * 27 => Three
 * 30 => Three And Five
 * 33 => Three
 * 35 => Five
 * 36 => Three
 * 39 => Three
 * 40 => Five
 * 42 => Three
 * 45 => Three And Five
 * 48 => Three
 * 50 => Five
 * 51 => Three
 * 54 => Three
 * 55 => Five
 * 57 => Three
 * 60 => Three And Five
 * 63 => Three
 * 65 => Five
 * 66 => Three
 * 69 => Three
 * 70 => Five
 * 72 => Three
 * 75 => Three And Five
 * 78 => Three
 * 80 => Five
 * 81 => Three
 * 84 => Three
 * 85 => Five
 * 87 => Three
 * 90 => Three And Five
 * 93 => Three
 * 95 => Five
 * 96 => Three
 * 99 => Three
 * 100 => Five
*/

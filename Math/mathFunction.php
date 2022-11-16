<?php

/*
=====================
== Math Functions ==
=====================
- abs(Number[Required])
    - Absolute value -> Non Negative Value

- mt_rand(Min [Optional] , Max [Optional]  || Rand[Optional] , Max [Optional])
    - mt_getrandmax() => Show Largest Possible Random Value
    - Generate Random Value Via The Mersnne Twister Random Number Generator Algorithm

- intdiv(dividend [Required] , divisor [Required])
    = Integer Division
    - Intdiv vs /

- fmod(dividend [Required] , divisor [Required])
    - Floating Point Remainder (Modulo)
    - fmod vs %

*/


// abs
echo abs(10)  . "<br>"; // 10
echo abs(0)   . "<br>"; // 0
echo abs(-20) . "<br>"; // 20
echo "\\*==============================*\\<br>";

//rand
echo rand()          . "<br>"; // Random
echo mt_getrandmax() . "<br>"; // Max Random =>  2147483647
echo rand(20, 50)    . "<br>"; //  Random
echo "\\*==============================*\\<br>";

//intdiv
echo 11 / 5          . "<br>"; // 2.2 return double
echo gettype(11 / 5) . "<br>"; // double
// VS
echo intdiv(11, 5)          . "<br>"; // 2 return Integar
echo gettype(intdiv(11, 5)) . "<br>"; // Integar
echo "\\*==============================*\\<br>";

echo 11 % 5               . "<br>"; // 1 return Integar
echo gettype(11 % 5)      . "<br>"; // Integar

echo 10.5 % 5             . "<br>"; // 0 return Integar
echo gettype(11 % 5)      . "<br>"; // Integar

echo fmod(11, 5)          . "<br>"; // 1 return double
echo gettype(fmod(11, 5)) . "<br>"; // double

echo fmod(10.5, 5)        . "<br>"; // 0.5 return Integar
echo gettype(fmod(11, 5)) . "<br>"; // double
echo "\\*==============================*\\<br>";


/*
=====================
== Math Functions ==
=====================
- ceil(Number[Required])
    - Round Up To Integer

- floor(Number[Required])
    - Round Down Integer
*/

// ceil
echo ceil(5.99)   . "<br>";  // 6
echo ceil(4.35)   . "<br>";  // 5

echo ceil(-5.99)  . "<br>";  // -5
echo ceil(-4.35)  . "<br>";  // -4

echo "\\*==============================*\\<br>";

// floor
echo floor(5.99)  . "<br>";  // 5
echo floor(4.35)  . "<br>";  // 4

echo floor(-5.99) . "<br>";  // -6
echo floor(-4.35) . "<br>";  // -5

echo "\\*==============================*\\<br>";



/*
=====================
== Math Functions ==
=====================
- round(Number[Required] , Precision[Optional] , Mode[Optional])
    - Round Up To Integer

        -Mode 
            - PHP_ROUND_HALF_UP
            - PHP_ROUND_HALF_DOWN
            - PHP_ROUND_HALF_EVEN
            - PHP_ROUND_HALF_ODD

- Ceil , Floor , Round => Return Double
*/


// Number
echo round(9.85) . "<br>"; // 10
echo round(9.50) . "<br>"; // 10
echo round(9.35) . "<br>"; // 9
echo round(9.10) . "<br>"; // 9

echo "\\*==============================*\\<br>";

// Precision
echo round(9.99, 1) . "<br>"; // 10
echo round(9.85, 1) . "<br>"; // 9.9
echo round(9.50, 1) . "<br>"; // 9.5
echo round(9.35, 1) . "<br>"; // 9.4
echo round(9.10, 1) . "<br>"; // 9.1
echo round(9.995, 1) . "<br>"; // 10
echo round(9.994, 1) . "<br>"; // 10
echo round(9.994, 2) . "<br>"; // 9.99     

echo "\\*==============================*\\<br>";

// Mode

// PHP_ROUND_HALF_UP
echo round(9.85, 0, PHP_ROUND_HALF_UP) . "<br>"; // 10 (Default =>  0 && PHP_ROUND_HALF_UP)
echo round(9.49, 0, PHP_ROUND_HALF_UP) . "<br>"; // 9

// PHP_ROUND_HALF_DOWN
echo round(9.50, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // 9


// PHP_ROUND_HALF_EVEN
echo round(9.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 10
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 4

// PHP_ROUND_HALF_ODD
echo round(9.50, 0, PHP_ROUND_HALF_ODD) . "<br>"; // 9
echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>"; // 5

echo "\\*==============================*\\<br>";




/*
=====================
== Math Functions ==
=====================
- sqrt(Number[Required])
    - Square Root

- min(array [Required]) || min(Values[Required])
    - Find Lowest Value

- max(array [Required]) || max(Values[Required] 
    - Find Highest Value
*/

// sqrt
echo sqrt(16)  . "<br>"; // 4   =>  4 * 4  = 16  
echo sqrt(100) . "<br>"; // 10  => 10 * 10 = 100 
echo sqrt(25)  . "<br>"; // 5   =>  5 * 5  = 25 

echo "\\*==============================*\\<br>";

// min 

echo min(10, 5, 30, -8, -10)   . "<br>"; // - 10
echo min([10, 5, 30, -8, -10]) . "<br>"; // - 10

echo "<pre>";
print_r(min([1, 3, 5], [1, 2, 6]));
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 6
)
*/

// max
echo max(10, 5, 30, -8, -10)   . "<br>"; // 30
echo max([10, 5, 30, -8, -10]) . "<br>"; // 30

echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6]));
/*
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
)
*/
echo "</pre>";

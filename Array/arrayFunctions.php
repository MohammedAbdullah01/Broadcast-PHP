<?php
/*
=============
== Array Functions ==
=============
    - array_chunk(Array[Required] , Length[Required] , Preserve_Key[Optional])
        - Split An Array Into Chunks [Return A Multidimensional Indexed Array]
        - Preserve_Key
            [False => Default] Reindex Thhe Keys
            [True] => Preserve The Keys

    - array_change_key_case(Array[Required] , Case[optional])
        - Changes The cace Of All keys In An Array
        - Case
            [CASE_LOWER => Default] Changes The Keys To Lowercase
            [CASE_UPPER]            Changes The Keys To Upercase

    - array_combine(Array_Of_Keys[Required] , Array_Of_Values[Required])

    - array_count_values(Array[Required])
        - Count All The Values Of An Array
*/

$friends = ['Mohammed', 'Ahmed', 'Gamal', 'Karma', 'Mahmmoud'];

// array_chunk
echo "<pre>";
print_r(array_chunk($friends, 2));
echo "</pre>";

$countries = ['EGY' => 'Egypt', 'KSA' => 'Saudi Arabia', 'SY' => 'Syria', 'USA' => 'United States'];

// array_change_key_case
echo "<pre>";
print_r(array_change_key_case($countries)); //CASE_LOWER => Default
echo "</pre>";

echo "<pre>";
print_r(array_change_key_case($countries, CASE_UPPER)); //CASE_Upper
echo "</pre>";

$keys = ['M', 'K', 'N'];
$values = ['Mohammed', 'Karma', 'Noor'];

// array_combine
echo "<pre>";
print_r(array_combine($keys, $values));
echo "</pre>";

$counting = ['A', 'B', 'O', 'B', 'B', 'O', 'B', 'A', 'O', 'B'];


// array_count_values
echo "<pre>";
print_r(array_count_values($counting));
echo "</pre>";
echo "################################# <br>";

/*
=============
== Array Functions ==
=============
    - array_reverse(Array[Required]  Preserve[Optional])
        - Reverse Array Elements

    - array_flip(Array[Required])
        - Exchange Keys With Its Values

    - count(Array[Required] , Mode[Optional])
        - Count Array Elements
        - Mode 
            0 => Default => Does Not Count Elements Of Multidimensional Arrays
            1 => Count Elements Of Multidimensional Arrays

    - in_array( Search[Required] , Array[Required] , Type[optional])
        - Checks If Values Exists In An Array

    - array_key_exists(Key[Required] , Array[Required])
        Check If Key Is Exists
*/

$family = ['Mohammed', 'Osama', 'Ahmed', 'Mahmmoud', 'Ali', ['Noor', 'Karma']];

// array_reverse
echo "<pre>";
print_r(array_reverse($family, true));
/* 
Array
(
    [5] => Array
        (
            [0] => Noor
            [1] => Karma
        )

    [4] => Ali
    [3] => Mahmmoud
    [2] => Ahmed
    [1] => Osama
    [0] => Mohammed
)
*/
echo "</pre>";

$countries2 = ['EGY' => 'Egypt', 'KSA' => 'Saudi Arabia', 'SY' => 'Syria', 'USA' => 'United States'];
// array_flip
echo "<pre>";
print_r(array_flip($countries2));
/*
Array
(
    [Egypt] => EGY
    [Saudi Arabia] => KSA
    [Syria] => SY
    [United States] => USA
)
 */
echo "</pre>";

$counting2 = ['A', 'B', 'C', 'D', [1, 2, 3]];

// count
echo count($counting2) . "<br>"; // 5 Default => 0 
echo count($counting2, 1) . "<br>"; // 8

$search = ['1', 2, 3, 4, 5];

if (in_array(1, $search, true)) {
    echo "Good <br>";
} else {
    echo "Not Found <br>";
}


$courses = [
    'JavaScript' => 150,
    'PHP'        => 180,
    'C++'        => 400,
    'HTML'       => 100,
];

// array_key_exists
if (array_key_exists('PHP', $courses)) {
    echo "The Course Is Found And The Price Is : {$courses['PHP']}";
}
echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== Array Functions ==
=============
    - array_keys(Array[Required]  Value[Optional] , Type[Optional])
        - Return The Array Keys
        - Type
            - False => Default => No Checking For Type
            - True =>  Check For Type

    - array_values(Array[Required])
        - Return All The Values Of An Array

    - array_pad(Array[Required] , Size[Required] Value[Required])
        - Pad array to the specified length with a value
        - Negative Value Add Elments Before Original Items 
        - If Size < Array Length Nothing Will Be Deleted

    - array_product( Array[Required])
        - Calculate the product of values in an array => Return In || Float
        - In Mathenatics , A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
        - Calculate The Sum Of Values In An Array
*/


$friends2 = ['Mohammed', 'Ahmed', 'Gamal', 'Mohammed', 'Karma', 'Mahmmoud', 1, '1'];

// array_keys
echo "<pre>";
print_r(array_keys($friends2));
/*
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
    [5] => 5
    [6] => 6
    [7] => 7
)
 */
echo "</pre>";

// array_keys
echo "<pre>";
print_r(array_keys($friends2, "Mohammed"));
/*
Array
(
    [0] => 0
    [1] => 3
)
 */
echo "</pre>";

// array_keys
echo "<pre>";
print_r(array_keys($friends2, "1", true));
/*
Array
(
    [0] => 7
)
 */
echo "</pre>";

echo '<br>';
echo "\\*==============================*\\<br>";

$countries3 = ['EGY' => 'Egypt', 'KSA' => 'Saudi Arabia', 'SY' => 'Syria', 'USA' => 'United States'];

// array_values
echo "<pre>";
print_r(array_values($countries3));
/*
Array
(
    [0] => Egypt
    [1] => Saudi Arabia
    [2] => Syria
    [3] => United States
)
 */
echo "</pre>";

echo '<br>';
echo "\\*==============================*\\<br>";


// // array_pad
$pad = ['A', 'B', 'C', 'D'];


echo "<pre>";
print_r(array_pad($pad, 7, 'E'));
/*
Array
(
    [0] => A
    [1] => B
    [2] => C
    [3] => D
    [4] => E
    [5] => E
    [6] => E
)
 */
echo "</pre>";

echo "<pre>";
print_r(array_pad($pad, -7, 'E')); // Negative
/*
Array
(
    [0] => E
    [1] => E
    [2] => E
    [3] => A
    [4] => B
    [5] => C
    [6] => D
)
 */
echo "</pre>";

// array_product 
$product = [2, 5, 10];

echo array_product($product); // 100

echo '<br>';
echo "\\*==============================*\\<br>";

// array_sum 
$sum = [10, 5, 30, 40];

echo array_sum($sum); // 85

echo '<br>';
echo "\\*==============================*\\<br>";


/*
=======================
== Array Functions ==
=======================
    - Every Array Has An Internal Pointer To Its "Current" Element
    - Which Is Initialized To The First Element
    - Functions Return Value Of Array Element That`s Currently Pointed By The Internal Pointer

    - current(Array[Required])
        - Return The Current Element In An Array

    - next(Array[Required])
        - Advance The Internal Pointer Of An Array

    - prev(Array[Required])
        - Rewind The Internal Array Pointer

    - reset(Array[Required])
        - Set The Internal Pointer Of An Array To Its First Element

    - end(Array[Required])
        - Set The Internal Pointer Of An Array To Its Last Element
*/


$friends3 = ['Mohammed', 'Ahmed', 'Gamal', 'Karma', 'Mahmmoud'];

// current
echo current($friends3) . "<br>"; // Mohammed

// next
echo next($friends3)    . "<br>"; // Ahmed

// current
echo current($friends3) . "<br>"; // Ahmed

// next
echo next($friends3)    . "<br>"; // Gamal

// prev
echo prev($friends3)    . "<br>"; // Ahmed

// reset
echo reset($friends3)   . "<br>"; // Mohammed

// end
echo end($friends3)     . "<br>"; // Mahmmoud


echo "\\*==============================*\\<br>";


/*
=======================
== Array Functions ==
=======================
    - array_merge(Array[Required] Other_Array[Optional])
        - Merge One Or More Arrays
            - Later Array Key With The Same Name Override The Value Of The Previous One
            - Numeric Key Will Be Renumbered

    - array_replace(Array[Required] , Replacement/s[Optional])
        - Replaces Elements From Passed Arrays Into The First Array 
            - Same Key => Value In Second Array Replace Same Key => Value In First Array
            - If Key In Second Array Not Found In First Array It Will Be Created

    - array_rand(Array[Required] , Num[Optional])
        - Pick One Or More Random Keys Out Of An Array

    - shuffle( Array[Required])
        - Shuffle An Array
*/


// array_merge 
$merge_one   = ['One' => 'PHP', 'two' => 'HTML', 'Theree' => 'Css'];
$merge_two   = ['One' => 'C++', 'Four' => 'Python'];
$merge_three = [1 => 'PHP', 2 => 'HTML', 3 => 'Css'];
$merge_four  = [4 => 'C++', 3 => 'Python'];

// Example 1 => Override => One
echo "<pre>";
print_r(array_merge($merge_one, $merge_two));
/*
Array
(
    [One] => C++
    [two] => HTML
    [Theree] => Css
    [Four] => Python
)
 */
echo "</pre>";

// Example 2 => Renumbered
echo "<pre>";
print_r(array_merge($merge_three, $merge_four));
/*
Array
(
    [0] => PHP
    [1] => HTML
    [2] => Css
    [3] => C++
    [4] => Python
)
 */
echo "</pre>";

echo "\\*==============================*\\<br>";

// array_replace

$merge_one1   = ['One' => 'PHP', 'two' => 'HTML', 'Theree' => 'Css'];
$merge_two1   = ['One' => 'C++', 'Four' => 'Python'];
$merge_three1 = [1 => 'PHP', 2 => 'HTML', 3 => 'Css'];
$merge_four1  = [4 => 'C++', 3 => 'Python'];

// Example 1 => Renumbered
echo "<pre>";
print_r(array_replace($merge_one1, $merge_two1));
/*
Array
(
    [One] => C++
    [two] => HTML
    [Theree] => Css
    [Four] => Python
)
 */
echo "</pre>";

// Example 2
echo "<pre>";
print_r(array_replace($merge_three1, $merge_four1));
/*
Array
(
    [1] => PHP
    [2] => HTML
    [3] => Python
    [4] => C++
)
 */
echo "</pre>";

echo "\\*==============================*\\<br>";

// array_rand
$array_rand = ['Tv', 'Playstaion', 'MacBook', 'Ipad', 'Car'];

echo $array_rand[array_rand($array_rand)] . "<br>";

echo "<pre>";
print_r(array_rand($array_rand, 2));
echo "</pre>";

foreach (array_rand($array_rand, 2) as $value) {
    echo $array_rand[$value] . "<br>";
}

echo "\\*==============================*\\<br>";

// shuffle
$shuffle = ['Tv', 'Playstaion', 'MacBook', 'Ipad', 'Car'];

shuffle($shuffle);
echo "<pre>";
print_r($shuffle);
echo "</pre>";
 
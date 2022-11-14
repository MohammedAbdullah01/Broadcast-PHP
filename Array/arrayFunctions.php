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

echo "\\*==============================*\\<br>";



/*
=======================
== Array Functions ==
=======================
    - array_shift(Array[Required])
        - Shift An Element Off The Beginning Of Array
        - This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required] )
        - Pop The Element Off The End Of Array
        - This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required] , Values[Optional])
        - Push one or more elements onto the end of array
        - You Can Use $arr[]

    - array_unshift( Array[Required] , Values[Optional])
        - Add one or more elements to the beginning of an array
        - This Function Will Reset => "reset()" The Input Array Pointer
*/

$chars = ['A', 'B', 'C', 'D'];

// array_shift
echo "<pre>";
print_r($chars);
/*
Array
(
    [0] => A
    [1] => B
    [2] => C
    [3] => D
)
 */
echo "</pre>";

echo array_shift($chars) . "<br>"; // A

echo "<pre>";
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
    [2] => D
)
 */
echo "</pre>";


// array_pop


echo "<pre>";
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
    [2] => D
)
 */
echo "</pre>";

echo array_pop($chars) . "<br>"; // D

echo "<pre>";
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
)
 */
echo "</pre>";


// array_push
// If Add More Element 
array_push($chars, 'M', 'N', 'K'); // Return (int) => 5

// OR If Add One Element 

$chars[] = "1";

echo "<pre>";
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
    [2] => M
    [3] => N
    [4] => K
    [5] => 1
)
 */
echo "</pre>";


// array_unshift
array_unshift($chars, 'One', 'Two', 'Three');

echo "<pre>";
print_r($chars);
/*
Array
(
    [0] => One
    [1] => Two
    [2] => Three
    [3] => B
    [4] => C
    [5] => M
    [6] => N
    [7] => K
    [8] => 1
)
 */
echo "</pre>";

echo "\\*==============================*\\<br>";

/*
=======================
== Array Functions ==
=======================
    - array_slice(Array[Required] , Start[Required] , Length[Required] , Preserve_Keys[Optional])
        - Extract A Slice Of The Array
            - Start 
                0 From Start
                1 From Last Element

            - Length
                Negative => Stop Slice Untill This Index
                Not Set  => All Element From Start Position

            - Preserve Keys
                False => Default => Reset Keys
                True  => Preserve Keys

        If Array Have Strtin Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required] , Start[Required] , Length[Optional] , Array[Optional])
        - Remove A Portion Of The Array And Replace It With Something Else
        
            Start
                0 From Start 
                1 From Last Element
                
            Length
                Negative => Stop Removing Untill This Index
                Not Set  => Remove All Elements From Start Position
*/


$chars2 = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

$chars_with_string_keys  = ['A' => 1, 'B' => 2, 'C' => 3];
$chars_with_numeric_keys = [10  => 1,  20 => 2,  30 => 3];

/*
    - Note 
        - Do Not Be Affected By The Array In => array_slice()
*/
echo "<pre>";
print_r(array_slice($chars2, 2));
/*
Array
(
    [0] => C
    [1] => D
    [2] => E
    [3] => F
    [4] => G
    )
    */

// Or => Negative
print_r(array_slice($chars2, -4));
/*
Array
(
    [0] => D
    [1] => E
    [2] => F
    [3] => G
)
*/

// Length
print_r(array_slice($chars2, 2, 3));
/*
Array
(
    [0] => C
    [1] => D
    [2] => E
)
*/
// Or => Negative
print_r(array_slice($chars2, 2, -3));
/*
Array
(
    [0] => C
    [1] => D
    )
    */

// Preserve_Keys
print_r(array_slice($chars_with_string_keys, 0, 2)); // Maintains If => Preserve Type => String
/*
Array
(
    [A] => 1
    [B] => 2
)
*/
print_r(array_slice($chars_with_numeric_keys, 0, 2)); // Does Not Maintain If => Numeric 
/*
Array
(
    [0] => 1
    [1] => 2
)
*/
print_r(array_slice($chars_with_numeric_keys, 0, 2, TRUE)); // In the case of keeping the key even if its type is a number add => True 
/*
Array
(
    [10] => 1
    [20] => 2
)
*/

print_r($chars2); // Array =>  just like it is
/*
    Array
(
    [0] => A
    [1] => B
    [2] => C
    [3] => D
    [4] => E
    [5] => F
    [6] => G
)
*/


$nums = [10, 20, 30, 40, 50, 60, 70];

/*
    - Note 
        - Affected By Array In => array_splice()
*/

// array_splice

//Length
print_r(array_splice($nums, 2)); // Remove from start length => 2 to end  
/* 
Array
(
    [0] => 30
    [1] => 40
    [2] => 50
    [3] => 60
    [4] => 70
)
*/

print_r($nums); // The Remainder Of Array
/*
Array
(
    [0] => 10
    [1] => 20
)
*/

print_r(array_splice($nums, 0, 1)); // Remove from start length => 1 Only
/* 
Array
(
    [0] => 10
)
*/
print_r($nums); // The Remainder Of Array
/*
Array
(
    [0] => 20
)
*/

// Replacement
print_r(array_splice($nums, 0, 1, [80])); // Remove from start length => 1 only 
/* 
Array
(
    [0] => 10
)
*/
print_r($nums); // The Remainder Of Array
/*
Array
(
    [0] => 80
)
*/
echo "</pre>";

echo "\\*==============================*\\<br>";



/*
=======================
== Array Functions ==
=======================
    - sort(Array[Required]    , Flag[Optional])
        - Sort An Indexed Array In Ascending Order

    - rsort(Array[Required]   , Flag[Optional])
        - Sort An Indexed Array In Descending Order

    - asort(Array[Required]   , Flag[Optional])
        - Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required]  , Flag[Optional])
        - Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required]   , Flag[Optional])
        - Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required]  , Flag[Optional])
        - Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required] , Flag[Optional])
        - Sort An Array By Using A "Natural Order" Algorithm
*/


$names = ['Mohammed', 'Noor', 'Karma', 'Ali', 'Gamal'];

echo "<pre>";
// Sort
sort($names);
print_r($names);
/*
Array
(
    [0] => Ali
    [1] => Gamal
    [2] => Karma
    [3] => Mohammed
    [4] => Noor
)
*/

// Rsort
rsort($names);
print_r($names);
/*
Array
(
    [0] => Noor
    [1] => Mohammed
    [2] => Karma
    [3] => Gamal
    [4] => Ali
)
*/

$countries4 = ['S' => 'Syria', 'E' => 'Egypt', 'I' => 'Iraq', 'Q' => 'Qatar'];


// asort => Sotr Value 
asort($countries4);
print_r($countries4);
/*
Array
(
    [E] => Egypt
    [I] => Iraq
    [Q] => Qatar
    [S] => Syria
)
*/
// arsort => Sotr Value 
arsort($countries4);
print_r($countries4);
/*
Array
(
    [S] => Syria
    [Q] => Qatar
    [I] => Iraq
    [E] => Egypt
)
*/

// ksort => Sotr Key 
ksort($countries4);
print_r($countries4);
/*
Array
(
    [E] => Egypt
    [I] => Iraq
    [Q] => Qatar
    [S] => Syria
)
*/

// krsort => Sotr Key 
krsort($countries4);
print_r($countries4);
/*
Array
(
    [S] => Syria
    [Q] => Qatar
    [I] => Iraq
    [E] => Egypt
)
*/

$files = ['Photo1.png', 'Photo20.png', 'Photo3.png'];

// natsort => Sort Natural Order
natsort($files);
print_r($files);
/*
Array
(
    [0] => Photo1.png
    [2] => Photo3.png
    [1] => Photo20.png
)
*/

echo "</pre>";

echo "\\*==============================*\\<br>";


/*
=======================
== Array Functions ==
=======================
    - array_map(Callback Function[Required] , Array[Required] , Other Arrays[Optional])
        - Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required]  Callback Function[Required] , Flag[Optional])
        - Filters Elements Of An Array Using A Callback Function
            - Flag
                - ARRAY_FILTER_USE_KEY
                - ARRAY_FILTER_USE_BOTH
                - 0 Default => Send Value As Arguments
*/

function sayHello($name)
{
    return "Hello : {$name}";
}

$first_names = ['Ahmed', 'Mohammed', 'Ali', 'Karma', 'Nooh'];
$last_names  = ['Samy', 'Amr', 'Omar', 'Baraa', 'Ibrahim'];

echo "<pre>";
print_r(array_map("sayHello", $first_names));
/*
Array
(
    [0] => Hello : Ahmed
    [1] => Hello : Mohammed
    [2] => Hello : Ali
    [3] => Hello : Karma
    [4] => Hello : Nooh
)
*/
// OR Anonumous Function
print_r(array_map(fn ($fname, $lname) => "Hello Mr : {$fname} {$lname}", $first_names, $last_names));
/*
Array
(
    [0] => Hello Mr : Ahmed Samy
    [1] => Hello Mr : Mohammed Amr
    [2] => Hello Mr : Ali Omar
    [3] => Hello Mr : Karma Baraa
    [4] => Hello Mr : Nooh Ibrahim
)
*/
echo "</pre>";


$array_filter = [
    1 => 5,
    9 => 2,
    6 => 8,
    3 => 7,
    8 => 4,
];

function checkNumber($n)
{
    return $n >= 4;
}

echo "<pre>";
print_r(array_filter($array_filter, "checkNumber")); // Not Used Flag => Checked Value => Default 0
/*
Array
(
    [1] => 5
    [6] => 8
    [3] => 7
    [8] => 4
    )
*/

// Flag
print_r(array_filter($array_filter, "checkNumber",  ARRAY_FILTER_USE_KEY)); // Used Flag => Checked Key => ARRAY_FILTER_USE_KEY 
/*
Array
(
    [9] => 2
    [6] => 8
    [8] => 4
)
*/

print_r(array_filter($array_filter, fn ($n1, $n2) => $n1 >= 4 && $n2 >= 4,  ARRAY_FILTER_USE_BOTH)); // Used Flag => Checked Key & Value => ARRAY_FILTER_USE_BOTH 
/*
Array
(
    [6] => 8
    [8] => 4
)
*/
echo "</pre>";


echo "\\*==============================*\\<br>";


/*
=======================
== Array Functions ==
=======================
    - array_reduce( Array[Required] , Callback Function[Required] , Initial_Value[Optional])
        - Iteratively reduce the array to a single value using a callback function
        - Reduce The Array To A Single Value
        - Carry => The Value Of The Previous Iteration || Initial Value
        - Item => The Value Of The Current Iteration
*/


$nums2 = [10, 20, 50, 4, 9];

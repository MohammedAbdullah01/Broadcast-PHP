<?php
/*
===================
== Function ==
===================
Anonymous Function
    - When We Create A Function We Give It A Name So We Can Call It Later With That Name  
    - Sometimea We Need To Create A Function For Specific Task <= This Is Not Against DRY

- Variable Inherit From Parent Scope 
- Variable Inherit By Reference From Parent Scope
- Anonymous Function Can Be Passed To A Function 
- Anonymous Function Can Be Return From A Function 

- Search 
    - Closure
*/

// Normal Function With Parameter

function sayHello($name)
{
    return "Hello {$name}";
}
echo SayHello("Mohammed"); // Hello Mohammed

echo '<br>';
echo "\\*==============================*\\<br>";

// Anonymous Function In Variable

$sayHello  = function () {
    return "Hello";
};
echo $sayHello(); // Hello

echo '<br>';
echo "\\*==============================*\\<br>";

// Anonymous Function With Parameter In Variable

$sayHello  = function ($name) {
    return "Hello {$name}";
};
echo $sayHello("Ahmed"); // Hello Ahmed

echo '<br>';
echo "\\*==============================*\\<br>";

// Inherit Variable From Parent Scope

$age = 12;
$sayHi  = function ($someOne) use ($age) {
    return "Hello {$someOne} Is A Age {$age}";
};
echo $sayHi("Karma"); // Hello Ahmed


echo '<br>';
echo "\\*==============================*\\<br>";

// Pass Anonymous Function To Function => array_map

$nums = [50, 10, 40, 30, 20];

function addNum($num)
{
    return $num += 5;
}
$numberAddingFive = array_map('addNum', $nums);

echo "<pre>";
print_r($numberAddingFive);
/*
    Array
(
    [0] => 55
    [1] => 15
    [2] => 45
    [3] => 35
    [4] => 25
)
*/

echo "</pre>";

echo '<br>';
echo "\\*==============================*\\<br>";


$numberAddingTen = array_map(function ($item) {
    return $item + 10;
}, $nums);

echo "<pre>";
print_r($numberAddingTen);
/*
    Array
(
    [0] => 60
    [1] => 20
    [2] => 50
    [3] => 40
    [4] => 30
)
*/

echo "</pre>";

echo '<br>';
echo "\\*==============================*\\<br>";


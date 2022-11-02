
<?php
/*
===================
== Function ==
===================
Arrow Function
    - Short Syntax For Anonymous Function 
    - Automatic Use Variable From Parent Scope

Arrow Function
    - Function Replaces With => fn 
    - No Need For Curly Braces 
    - Return In Omitted 
*/

// Arrow Function In Variable 

$sayHello  = fn() => "Hello"; 
    

echo $sayHello(); // Hello

echo '<br>';
echo "\\*==============================*\\<br>";

// Arrow Function With Parameter In Variable 

$sayHello  = fn ($name) => "Hello {$name}"; 

echo $sayHello("Ahmed"); // Hello Ahmed

echo '<br>';
echo "\\*==============================*\\<br>";

// Arrow Inherit Variable From Parent Scope Is Automatic 

$age = 12;
$sayHi  = fn ($someOne) => "Hello {$someOne} Is A Age {$age}";

echo $sayHi("Karma"); // Hello Karma Is A Age 12 

echo '<br>';
echo "\\*==============================*\\<br>";

// Pass Arrow Function To Function ->array_map 

$nums = [50, 10, 40, 30, 20];

$numberAddingFive = array_map(fn ($num) => $num += 5 , $nums);

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


$numberAddingTen = array_map(fn ($item) => $item + 10, $nums);

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

<?php


/*
===================
== Function ==
===================
    - Introduction And Dry Concept  
    - Parameter  
    - Argument  
*/


function sayHello(string $name): string
{
    return "Hello {$name} <br>";
}

echo sayHello("Mohammed") . sayHello("Ahmed");
echo sayHello("Noor")     . sayHello("Karma");

echo '<br>';
echo "\\*==============================*\\<br>";


/*
===================
== Function ==
===================
    - Advenced Example With Parameters And Arguments 
    - Real Life Example 
*/

function sayHelloTo($name, $age)
{
    echo "Hello {$name} <br> Is Age {$age} <br>";
}

echo sayHelloTo("Mohammed", 40);
echo sayHelloTo("Ahmed", 30);

echo '<br>';
echo "\\*==============================*\\<br>";

function deepFreezer($item)
{
    if ($item === "Water") :
        echo "Make Ice <br>";

    elseif ($item === "Coca Cola") :
        echo "Make It Cold <br>";

    elseif ($item === "Fruits") :
        echo "Make It Fresh <br>";

    else :
        echo "Unknown Item <br>";
    endif;
}

deepFreezer('Coca Cola');
deepFreezer('Fruits');
deepFreezer('Water');
deepFreezer('Meat');

echo '<br>';
echo "\\*==============================*\\<br>";


/*
===================
== Function ==
===================
    - Optional Return & Null 
    - End After Return 
*/

$prizes = ['PC', 'Plastation', 'XBox', 'Apple Tv', 'Laptop', 'Ipad', 'Iphone13'];

function getNumber($num1, $num2)
{
    return $num1 + $num2;
    // echo "Will Not Echo Anything"
}

$prizeNumber = getNumber(1, 2);

echo  $prizes[$prizeNumber];

echo '<br>';
echo "\\*==============================*\\<br>";



/*
===================
== Function ==
===================
- Default Prameter Value 
    - Using
    - Test Data
    - Skip Arguments
*/

function getData($country = "Private Country", $name = "Private Name", $age = "Private Age", $address = "Private Address")
{
    $lineOne = "Your Country Is {$country}  And Your Name Is {$name}";
    $lineTwo = "Your Age Is {$age}  And Your Address Is {$address}";

    return "{$lineOne} <br> {$lineTwo}";
}

echo getData(address: "Cairo First Floor");

echo '<br>';
echo "\\*==============================*\\<br>";


/*
===================
== Function ==
===================
- Variable Argument List Prameter Value 
    - func_num_args()
    - func_get_arg($index)
    - func_get_args()
*/

function calculate(...$nums)
{
    // echo "Number Of Arguments " . func_num_args() . "<br>";
    // echo "Argument Index Number " . func_get_arg(3) . "<br>";
    // echo "<pre>";
    // print_r(func_get_args());
    // echo "</pre>";

    // $result = 0;

    // foreach (func_get_args() as $arg) :
    //     $result += $arg;
    // endforeach;
    // echo $result; // 120
    // #############################

    echo "Argument Index Number " . $nums[3] . "<br>";

    echo "<pre>";
    print_r($nums);
    echo "</pre>";

    $result = 0;
    foreach ($nums as $num) :
        $result += $num;
    endforeach;
    echo $result; // 120
}

echo calculate(10, 20, 30, 60);
echo '<br>';
echo "\\*==============================*\\<br>";


/*
===================
== Function ==
===================
- Function Advenced Training 
    - Unpacking In Arguments

- Search 
    - PHP Variadic Functions
    - Splat Operator
*/

$groupOfSkills = ['Html', 'Css', 'Bootstrap', 'Js', 'PHP', 'Mysql'];

function getDatas($name, $country = "Private", ...$skills)
{
    echo "Hello {$name} Your Is {$country} <br>";

    foreach ($skills as $skill) :
        echo "-- {$skill} <br>";
    endforeach;
}


getDatas('Mohammed', 'Egypt', 'Html', 'Css', "PHP");

// OR

// getDatas('Mohammed', 'Egypt', ...$groupOfSkills);

// OR

// getDatas('Mohammed', 'Egypt', ...['Html', 'Css']);

echo '<br>';
echo "\\*==============================*\\<br>";


/*
===================
== Function ==
===================
- Variable Function
    - PHP Allow To Use Variable Like Function
    - When You Append Parentheses () To Variable PHP Will Look For Function With That Name 

- Function Exists
    - function_exists("Func Name")
*/

//  Exammple 1

function one()
{
    return "One From Function";
}

$func1 = "one";

echo $func1(); // One From Function

echo '<br>';

//  Exammple 2

function say_hello_to($someone)
{

    return "Hello {$someone}";
}

$func2 = "say_hello_to";

echo $func2("Mohammed"); // Hello Mohammed

echo '<br>';

//  function_exists

function testing()
{
    echo "Testing From Function";
}

if (function_exists('testing')) :
    echo testing();
else :
    echo "Function Not Found";
endif;

echo '<br>';
echo "\\*==============================*\\<br>";


/*
===================
== Function ==
===================
- Passing Argument By Reference  
- By Default , Function Argument Are Passed By Value
- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
- To Change It Outside Pass The Argument By Reference 

- Return Type Declarations

- Search 
    - PHP Strict Mode
*/

function addFive(&$number)
{
    $number += 5;
    return $number;
}

$n = 15;

echo addFive($n) . "<br>"; // 20 

echo $n; // 20
echo '<br>';

function calculateNumber($num1, $num2): int // Return Type Declarations
{
    return $num1 + $num2;
}

echo calculateNumber(10.5, 13.5); // 24 => Intager

echo '<br>';
echo "\\*==============================*\\<br>";

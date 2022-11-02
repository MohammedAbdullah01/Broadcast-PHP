<?php

/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Arithmetic Operators
        - Used To Do Arithmetical Operation And Conversion

            - $a [+]  $b => Addition
            - $a [-]  $b => Subtraction
            - $a [*]  $b => Multiplication
            - $a [/]  $b => Division
            - $a [%]  $b => Modulus
            - $a [**] $b => Exponentiation
            - +$a        => Identity
            - -$a        => Negation
 */

// Addition
echo 10 + 10; // 20
echo '<br>';
echo gettype(10 + 10); // Integer
echo '<br>';

echo 10.5 + 10.5; // 21
echo '<br>';
echo gettype(10.5 + 10.5); // Double
echo '<br>';

// Subtraction
echo 10.5 - 10.5; // 0
echo '<br>';
echo gettype(10.5 - 10.5); // Double
echo '<br>';

echo 10 - 10; // 0
echo '<br>';
echo gettype(10 - 10); // Integer
echo '<br>';

// Multiplication
echo 10.5 * 10.5; // 110.25
echo '<br>';
echo gettype(10.5 * 10.5); // Double
echo '<br>';

// Division
echo 10.5 / 10.5; // 1
echo '<br>';
echo gettype(10.5 / 10.5); // Double
echo '<br>';

echo 20 / 8; // 2.5
echo '<br>';
echo gettype(20 / 8); // Double
echo '<br>';

echo 20 / 10; // 2
echo '<br>';
echo gettype(20 / 10); // Integer
echo '<br>';

// Modulus
echo 20 % 10; // 0
echo '<br>';
echo gettype(20 % 10); // Integer
echo '<br>';

echo 22 % 10; // 2 =>  Remove 2 To Become 20 
echo '<br>';
echo gettype(22 % 10); // Integer
echo '<br>';

echo 29 % 10; // 2 =>  Remove 9 To Become 20 
echo '<br>';
echo gettype(29 % 10); // Integer 
echo '<br>';

// Exponentiation
echo 2 ** 4; // 16  
echo '<br>';
echo gettype(2 ** 4); // Integer
echo '<br>';

// Identity
echo "100"; // 100  
echo '<br>';
echo gettype("100"); // String
echo '<br>';

echo +"100"; // 100  
echo '<br>';
echo gettype(+"100"); // Integer != String
echo '<br>';


// Negation
echo -"-100"; // 100  
echo '<br>';
echo gettype(-"-100"); // Integer
echo '<br>';

echo "\\*==============================*\\<br>";


/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Assignment Operators
        - Used To Do Arithmetical Operation And Conversion

            - $a [+=]  $b => Addition
            - $a [-=]  $b => Subtraction
            - $a [*=]  $b => Multiplication
            - $a [/=]  $b => Division
            - $a [%=]  $b => Modulus
            - $a [**=] $b => Exponentiation
 */

$a = 10;
//  $a = $a + 20;
$a += 20;
echo $a; // 30
echo '<br>';

$a = 10;
//  $a = $a - 20;
$a -= 20;
echo $a; // -10
echo '<br>';

$a = 10;
//  $a = $a * 20;
$a *= 20;
echo $a; // 200
echo '<br>';


$a = 20;
//  $a = $a / 10;
$a /= 10;
echo $a; // 2
echo '<br>';


$a = 10;
//  $a = $a ** 4;
$a **= 4;
echo $a; // 10000
echo '<br>';

echo "\\*==============================*\\<br>";

/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Comparison Operators 
        - Used To Do Arithmetical Operation And Conversion

            - [==]    => Equal
            - [!=]    => Not Equal 
            - [<>]    => Not Equal
            - [===]   => Identical
            - [!==]   => Not Identical
            - [>]     => Larger Than
            - [>=]    => Larger Than Or Equal
            - [<]     => Smaller Than
            - [<=]    => Smaller Than OR Equal
            - [<=>]  => Spaceship [Less Than , Equal Or Greater]
 */

// Equal => Value
var_dump(100 == 100); // TRUE
echo '<br>';
var_dump(100 == "100"); // TRUE
echo '<br>';
var_dump("100" == "100"); // TRUE
echo '<br>';
var_dump(100.1 == "100"); // False
echo '<br>';

// Not Equal => Value
var_dump(100 != 100); // False
echo '<br>';
var_dump(100 != "100"); // False
echo '<br>';
var_dump("100" != "100"); // False
echo '<br>';
var_dump(100.1 != "100"); // TRUE
echo '<br>';

// Not Equal => Value
var_dump(100 <> 100); // False
echo '<br>';
var_dump(100 <> "100"); // False
echo '<br>';
var_dump("100" <> "100"); // False
echo '<br>';
var_dump(100.1 <> "100"); // TRUE
echo '<br>';

// Identical => Value And Type
var_dump(100 === 100); // TRUE
echo '<br>';
var_dump(100 === "100"); // False
echo '<br>';
var_dump("100" === "100"); // TRUE
echo '<br>';
var_dump(100.1 === "100"); // False
echo '<br>';

// Not Identical => Value And Type
var_dump(100   !== 100); // False
echo '<br>';
var_dump(100.0 !== 100); // TRUE
echo '<br>';
var_dump(100   !== "100"); // TRUE
echo '<br>';
var_dump("100" !== "100"); // False
echo '<br>';
var_dump(100.1 !== "100"); // TRUE
echo '<br>';

// Larger Than
var_dump(100   > 50); // TRUE
echo '<br>';
var_dump(100   > "100"); // False
echo '<br>';
var_dump("100" > "100"); // False
echo '<br>';
var_dump(100.0 > "100"); // False
echo '<br>';

// Larger Than OR Equal
var_dump(100   >= 50); // TRUE
echo '<br>';
var_dump(100   >= "100"); // TRUE
echo '<br>';
var_dump("100" >= "100"); // TRUE
echo '<br>';
var_dump(100.0 >= "100"); // TRUE
echo '<br>';

// Spaceship Less Than , Equal Or Greater
var_dump(100   <=> 50); // 1
echo '<br>';
var_dump(100   <=> "100"); // 0
echo '<br>';
var_dump(100   <=> 200); // -1
echo '<br>';
var_dump("100" <=> "100"); // 0
echo '<br>';
var_dump(100.0 <=> "100"); // 0
echo '<br>';

echo "\\*==============================*\\<br>";

/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Incrementing & Decrementing  Operators
        - Increase And Decrease Values

 */

$likes = 0;
$likes++;
$likes++;
$likes++;
$likes--;
echo $likes; // 2
echo "<br>";

// Post Increment
$a = 0;
echo $a++; // 0 
echo "<br>";
echo $a; // 1
echo "<br>";

// Pree Increment
$a = 0;
echo ++$a; // 1
echo "<br>";
echo $a; // 1
echo "<br>";

echo "\\*==============================*\\<br>";

/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Logical Operators
        - Compare Condtions
            - and   => Two Are True
            - &&    => Two Are True ["&&" Has A Greater Precodence Than "and"]
            - or    => One Or Both Is True
            - ||    => One Or Both Is True ["||" Has A Greater Precodence Than "or"]
            - xor   => One Is True But Not Both
            - !     => Not True

 */

// and &&
var_dump(100 > 50 and 100 > 80 and 100 > 90); //True
echo "<br>";
var_dump(100 > 50 && 100 > 80 && 100 > 100); //False
echo "<br>";

// or ||
var_dump(100 > 50 or 100 > 80 or 100 > 100); //True
echo "<br>";
var_dump(100 > 50 || 100 > 80 || 100 > 100); //True
echo "<br>";

//  xor
var_dump(100 > 50 xor 100 > 110); //True
echo "<br>";
var_dump(100 > 50 xor 100 > 80); //False
echo "<br>";
echo "\\*==============================*\\<br>";


/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    String Operators
        - Concatenate String
            - .
            - .=
 */

//  .
$a = "Mohamed";
$b = "Ahmed";

echo $a .  $b; // MohamedAhmed
echo "<br>";
echo $a . ' ' . $b; // Mohamed Ahmed
echo "<br>";

// .=
$x = "Hello";
$x .= " Is";
$x .= " Php";

echo $x; // Hello Is Php

echo "<br>";
echo "\\*==============================*\\<br>";

/*
    =====================
    == Operators ==
    =====================
    Array Operators
        - Deal With Arrays

            - [+]     => Union
            - [==]    => Equal => Same Key And Value
            - [!=]    => Not Equal 
            - [<>]    => Not Equal
            - [===]   => Identical => Same Key And Value , Same Order , Same Type
            - [!==]   => Not Identical
 */

// Union
$arr1 = [1 => 'A', 2 => 'B'];
$arr2 = [3 => 'C', 4 => 'D'];
$arr3 = $arr1 + $arr2;

echo "<pre>";
print_r($arr3);
echo "</pre>";

// Equal
$arr4 = [1 => '10', 2 => '20'];
$arr5 = [2 => 20, 1 => 10];

var_dump($arr4 == $arr5); // True
echo "<br>";

//  Not Equal
var_dump($arr4 != $arr5); // False
echo "<br>";
var_dump($arr4 <> $arr5); // False

// Identical
$arr6 = [1 => '100', 2 => '200'];
$arr7 = [2 => 200, 1 => 100];
$arr3 = $arr1 + $arr2;

echo "<br>";
var_dump($arr6 === $arr7); // False

echo "<br>";
echo "\\*==============================*\\<br>";



/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Operator  Precedence
        -  ||   =>  Has A Greater Precedence Than "or"
        -  &&   =>  Has A Greater Precedence Than "&&"
 */

echo 2 + 4 * 5; // 22 
echo "<br>";

echo (2 + 4) * 5; // 30
echo "<br>";

$t = 10 || false; // $t = (10 || false ) => $t = 1
echo $t; // 1
echo "<br>";

$r = 10 or false; // ($r = 10) or false => $t = 10
echo $r;  // 10

echo "<br>";
echo "\\*==============================*\\<br>";


/*
    =====================
    == Operators ==
    =====================
    Operators
        - Used To Perform Operation On Value

    Error Control  Operator
        - Control The Errors
            - @
            - Variable
            - File
            - Include
 */

// Variable
$d = 10;
$b = @$d or die('Variable Not Found');
echo $b;
echo "<br>";

//  File
$f = @file('mohamed.text') or die("File Not Found text");
echo "<pre>";
print_r($f);
echo "</pre>";
echo "<br>";

//  Include
(@include('mohamed.php')) or die('File Not Found php');

echo "<br>";
echo "\\*==============================*\\<br>";

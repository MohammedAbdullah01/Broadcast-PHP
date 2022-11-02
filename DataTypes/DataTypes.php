<?php

/*
    =================
    == Data Types ==
    =================
    - bool   => Boolean
    - int    => Integer
    - float  => Floating Point Number || Double
    - string 
    - array 
    - other Types
    - gettype()
 */

echo gettype(true); // Boolean
echo "<br>";

echo gettype(0); // Integer
echo "<br>";

echo gettype(1); // Integer
echo "<br>";

echo gettype(70.30); // Double
echo "<br>";

echo gettype(-50.10); // Double
echo "<br>";

echo gettype('Mohammed'); // String
echo "<br>";

echo gettype(array('Mohammed', 'Ahmed', 'Karma')); // array
echo "<br>";

echo gettype(array('Mohammed' => 40, 'Ahmed' => 30, 'Karma' => 22)); // array
echo "<br>";
echo "--------<br>";
/*============================================================================= */


/*
    =================
    == Data Types ==
    =================
    - Type Juggling + Automatic Type Conversion 
 */

echo 1 + "2"; // 3
echo "<br>";
echo gettype(1 + "2"); //Inteager
echo "<br>";
echo TRUE; // 1
echo "<br>";
echo gettype(TRUE); //Bollean
echo "<br>";
echo true + true; // 2
echo "<br>";
echo gettype(true + true); //Integer
echo "<br>";
echo 10 + 15.5; // 25.5
echo "<br>";
echo gettype(10 + 15.5); // Double
echo "<br>";
echo "--------<br>";
/*============================================================================= */


/*
    =====================
    == Types Casting ==
    =====================
    - boolean   or  Boolean
    - Integer    or  int
    - float  or  double or real
    - string 
    - array 
    - object
    - null
 */

echo 5 + "5 Lessons"; // 10 Warning => non-numeric value
echo "<br>";
echo 5 + (int) "5 Lessons"; // 10 
echo "<br>";
echo 10 + (int) 15.5; // 25
echo "<br>";
echo gettype(10 + (int) 15.5); //Integer
echo "<br>";
echo gettype(10.5 +  15.5); //Double
echo "<br>";
echo gettype((int) 10.5 + (int) 15.5); //Integer
echo "<br>";
echo gettype((int) (10.5 +  15.5)); //Integer
echo "<br>";
echo "-------<br>";
/*============================================================================= */

/*
    =====================
    == Data Types ==
    =====================
    - Boolean + Converting To Boolean 
 */

var_dump((bool) ''); // False
echo "<br>";
var_dump((bool) array()); // False
echo "<br>";
var_dump((bool) []); // False
echo "<br>";
var_dump((bool) 0); // False
echo "<br>";
var_dump((bool) '0'); // False
echo "<br>";
var_dump((bool) 'Mohammed'); // True
echo "<br>";
var_dump((bool) array(1)); // True
echo "<br>";
var_dump((bool) [1]); // True
echo "<br>";
var_dump((bool) -1); // True
echo "<br>";
var_dump((bool) 10.5); // True
echo "<br>";
echo "-------<br>";
/*============================================================================= */


/*
    =====================
    == Data Types ==
    =====================
    - String  And Escaping 
 */

echo 'Hello Mohammed'; // Hello Mohammed
echo "<br>";
echo "Hello Mohammed"; // Hello Mohammed
echo "<br>";
echo "Hello \"Mohammed\" "; // Hello "Mohammed"
echo "<br>";
echo "Hello Mohammed\\"; // Hello "Mohammed\"
echo "<br>";
echo nl2br('I 
Love 
Php');
/*
    I
    Love
    Php
 */
echo "<br>";
echo "-------<br>";
/*============================================================================= */

/*
    =====================
    == Data Types ==
    =====================
    - Heredoc
    - Nowdoc
 */
$name = 'PHP';
//Heredoc
echo <<<"Here"
Hello PHP $$$$ ''''''' """"" \\\\
I Love The $name
Here; // Hello PHP $$$$ ''''''' """"" \\ I Love The PHP
echo "<br>";

echo <<<"navlinks"
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
navlinks;
/*
    PHP
    PHP
    PHP
 */
echo "<br>";

//Nowdoc
echo <<<'Now'
Hello PHP $$$$ ''''''' """"" \\\\
I Love The $name
Now; // Hello PHP $$$$ ''''''' """"" \\\\ I Love The $name
echo "<br>";
echo "-------<br>";
/*============================================================================= */


/*
    =====================
    == Data Types ==
    =====================
    		== Array == 
		=====================
    - Array With Key
    - Array Withouts Keys
    - Array With One Key
    - Array Value Override
		======================
		Print_r()
 */
print_r([
	'A' => 'Ahmed',
	'M' => 'Mohame',
	'Karma',
]);
echo "<br>";
echo "-------<br>";
/*============================================================================= */

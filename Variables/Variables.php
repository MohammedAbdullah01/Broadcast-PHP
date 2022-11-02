<?php

/*
    =====================
    == Varibales ==
    =====================
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Latter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Number Inside The Name
    [4] No Spacial characters Allowed
    [5] Case Sensitive
    - Test Single And Dobule Quotes

    Search 
    - Loosely Typed Language
 */

$username = "Mohammed";
$Username = "Ahmed";

echo $username; // Mohammed
echo '<br>';
echo $Username; // Ahmed
echo '<br>';

echo "\\*==============================*\\<br>";

/*
    =====================
    == Varibales ==
    =====================
    - Varibale Varibale
        Takes The Value Of A Variable And Treats That As The Name Of A Variable
 */

$a    = 'Mohammed';
$$a   = 'Ahmed';
$ $$a  = 'School';

echo $a; // Mohammed
echo '<br>';

echo $$a; // Ahmed
echo '<br>';

echo $Mohammed; // Ahmed
echo '<br>';

echo $ $$a; // School
echo '<br>';

echo $Ahmed;  // School
echo '<br>';

echo "Hello ${$a}"; // Hello Ahmed
echo '<br>';

echo "Hello $Mohammed"; // Hello Ahmed
echo '<br>';

echo "Hello ${$$a}"; // The School
echo '<br>';
echo "Hello $Ahmed"; // The School

echo '<br>';

echo "\\*==============================*\\<br>";

/*
    =====================
    == Varibales ==
    =====================
    - Assign Varibale By Referance 
        - By Default , Variables Are Always Assigned By Value
        - Assigned By Reference Make Variable Alias Or Point To Another 

    Search
        - Reference Are Not Pointers 
 */

$a = "Mohammed";
$b = &$a;
$b = 'Ahmed';

echo $a; //Ahmed
echo "<br>";

echo $b; // Ahmed
echo "<br>";

echo "\\*==============================*\\<br>";


/*
    =====================
    == Varibales ==
    =====================
    - Pre-Defined Variables 

    Search
        - PHP Pre-Defined Variables 
 */
echo '<br>';

echo "\\*==============================*\\<br>";
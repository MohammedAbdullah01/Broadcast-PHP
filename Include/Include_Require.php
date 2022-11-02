<?php


/*
========================
== Control Structure ==
========================
    - Including Files
        - Include 
        - Require 
*/




/*
Include :
    In Case The File Is Not There It Will 
    Complete The Work Of The Script => ( Warning )
*/

include('tests.php'); // Not Found The File 
echo '<br>';
echo 'Continue';
echo '<br>';
echo "\\*==============================*\\<br>";




/*
Require :
    In Case The File Does Not Exist It Will 
    Stop The Work Of The Script => ( Fatal Error )

*/
require('tests.php'); // Not Found The File 
echo '<br>';
echo 'Continue';

echo '<br>';
echo "\\*==============================*\\<br>";



/*
Include once:
    include Only One
*/

include_once('test.php'); // $a = 10 

echo  "{$a} <br>"; // 10

$a  = 20;

include_once('test.php'); // $a = 10 

echo  "{$a} <br>"; // 20

echo '<br>';
echo "\\*==============================*\\<br>";

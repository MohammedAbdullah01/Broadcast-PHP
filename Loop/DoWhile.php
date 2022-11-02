<?php


/*
========================
== Control Structure ==
========================
Loop
    -Do , While

Syantax
    do {
        # code...
    } while ($i <= 10);
*/
$i = 6;

do {
    echo "{$i} <br>";
    $i++;
} while ($i <= 5);

echo '<br>';
echo "\\*==============================*\\<br>";


// Printing Even Numbers 
$a = 2;
do {
    echo "{$a} <br>";
    $a += 2;
} while ($a <= 10);

echo '<br>';
echo "\\*==============================*\\<br>";

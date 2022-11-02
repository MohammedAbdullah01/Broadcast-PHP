<?php


/*
========================
== Control Structure ==
========================
Loop
    - While

Syantax
    while ($a <= 10) {
        # code...
    }
*/

$i = 1;

while ($i <= 4) {
    echo "{$i} <br>";
    $i++;
}

echo '<br>';
echo "\\*==============================*\\<br>";


// Another Syantax
$a = 1;

while ($a <= 5) :
    echo "{$a} <br>";
    $a++;
endwhile;

echo '<br>';
echo "\\*==============================*\\<br>";

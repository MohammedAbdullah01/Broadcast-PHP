<?php


/*
========================
== Control Structure ==
========================
Loop
    - Loop For

Syantax
    for ($i=0; $i < ; $i++) { 
        # code...
    }
*/
$i = 1;

for ($i = 1; $i <= 5; $i++) {
    echo "{$i} <br>";
}

echo '<br>';
echo "\\*==============================*\\<br>";


// Another Syantax

$a = 3;
for (;;) :
    if ($a == 4) :
        break;
    endif;

    echo "{$a} <br>";
    $a++;
endfor;

echo '<br>';
echo "\\*==============================*\\<br>";

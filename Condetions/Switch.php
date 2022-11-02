<?php


/*
========================
== Control Structure ==
========================
- Switch

Syantax
    switch (Expression) {
        case 1:
            Code Block 1
            break;

        case 2:
            Code Block 2 
            break;

        case 3:
            Code Block 3
            break;
                
        default:
            Default Code Block
            break;
    }
*/

$day = "Sat";

switch ($day) {
    case 'Sat':
        echo "Hello Today Is {$day} We Are Open From 10:16";
        break;
    case 'Sat':
        echo "Hello Today Is {$day} We Are Open From 10:16";
        break;
    case 'Sun':
        echo "Hello Today Is {$day} We Are Open From 12:18";
        break;
    case 'Mon':
    case 'Thu':
        echo "Hello Today Is {$day} We Are Open From 08:12";
        break;

    default:
        echo "Unknown Day";
        break;
}


echo '<br>';
echo "\\*==============================*\\<br>";

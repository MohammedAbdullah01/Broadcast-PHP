<?php

/*
    - Draw This Pattern In Cli

    *
    *   *
    *   *   *   
    *   *   *   * 
    *   *   *   *   * 
    *   *   *   *   *   * 
    *   *   *   *   *   *   *
    *   *   *   *   *   *   *   * 
    *   *   *   *   *   *   *   *   * 
    *   *   *   *   *   *   *   *   *   *
*/

for ($i = 1; $i <= 10; $i++) {
    for ($a = 1; $a <= $i; $a++) {

        echo "*   ";
    }
    echo "\n";
}



echo "\n--------------------------------------\n\n";


/*
    - Draw This Pattern In Cli Example 2 

    *   *   *   *   *   *   *   *   *   *
    *   *   *   *   *   *   *   *   * 
    *   *   *   *   *   *   *   * 
    *   *   *   *   *   *   *
    *   *   *   *   *   * 
    *   *   *   *   * 
    *   *   *   * 
    *   *   *   
    *   *
    *
*/




for ($e = 10; $e >= 1; $e--) {
    for ($q = $e; $q >= 1; $q--) {
        echo "*   ";
    }
    echo "\n";
}
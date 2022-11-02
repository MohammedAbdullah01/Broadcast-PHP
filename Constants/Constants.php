<?php

/*
    =====================
    == Constants ==
    =====================
    - That Value Cannot Change During The Execution 
    - Constants Always Uppercase
 */

define("DB_NAME", "Store");
define("MAIN_NUMBER", 5);

echo DB_NAME; // Store
echo '<br>';
echo MAIN_NUMBER * 50; // 250
echo '<br>';

echo "\\*==============================*\\<br>";


/*
    =====================
    ==  Constants ==
    =====================
    - Pre-Defined Constants [Cace Sensitive] 
        - PHP_VERSION 
        - PHP_OS_FAMILY 
        - PHP_INT_MAX 
        - DEFAULT_INCLUDE_PATH 
    
    - Magic Constants [Cace InSensitive] 
        - __LINE__ 
        - __FILE__ 
        - __DIR__  

    - Reserved Keywords  
        - break 
        - clone 

    Search
        - PHP Predefined Constants
        - Complit Time Vs Runtime
        - List Of Reserved Words
 */

echo php_uname(); // Informition Obreating System 
echo '<br>';

echo PHP_VERSION; // 8.1.10
echo '<br>';

echo PHP_OS_FAMILY; // Windows
echo '<br>';

echo PHP_INT_MAX; // 9223372036854775807
echo '<br>';

echo DEFAULT_INCLUDE_PATH; // C:\php\pear
echo '<br>';

echo __LINE__; //62
echo '<br>';

echo __FILE__; // C:\xampp\htdocs\BroadCastPhp\Constants\Constants.php
echo '<br>';

echo __DIR__; // C:\xampp\htdocs\BroadCastPhp\Constants
echo '<br>';

echo "\\*==============================*\\<br>";

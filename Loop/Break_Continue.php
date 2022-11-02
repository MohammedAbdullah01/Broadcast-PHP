<?php


/*
========================
== Control Structure ==
========================
    - Break And Continue 
*/

$countries = ['EG', 'SA', 'QA', 'SY' , 'USA' , 'GER'];

// Break
foreach ($countries as $country) {
    if($country == 'USA'){
        break ; 
    }
    echo "{$country} <br>";
};

echo '<br>';
echo "\\*==============================*\\<br>";

// Continue

$countries = ['EG', 'SA', 'QA', 'SY' , 'USA' , 'GER'];

foreach ($countries as $country) {
    if($country == 'USA'){
        continue ; 
    }
    echo "{$country} <br>";
};



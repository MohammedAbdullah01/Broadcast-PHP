<?php


/*
========================
== Control Structure ==
========================
Loop
    - Loop Foreach

Syantax
 -Echo Value Only
    foreach ($variable as  $value) {
            # code...
        }

    Or

    - Echo Key And Value 
        foreach ($variable as $key => $value) {
            # code...
        }
*/

//  Example 1
$countries = ['EG', 'SA', 'QA', 'SY'];

echo "<pre>";
echo print_r($countries);
echo "</pre>";

// echo Value Only
foreach ($countries as $country) {
    echo "{$country} <br>";
};

echo '<br>';
echo "\\*==============================*\\<br>";

//  Example 2

$countriesDiscount = ['EG' => 50, 'SA' => 30, 'QA' => 20, 'SY' => 15];

echo "<pre>";
echo print_r($countriesDiscount);
echo "</pre>";

// echo Key And Value 
foreach ($countriesDiscount as  $country => $discount) :
    echo "Country Name Is ( {$country} ) And Discount Is ( {$discount} ) <br>";
endforeach;

echo '<br>';
echo "\\*==============================*\\<br>";

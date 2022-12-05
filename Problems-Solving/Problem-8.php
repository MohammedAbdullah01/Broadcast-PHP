<?php

/*
- Use Cli
- Write a PHP Function That Inserts a New Item In An Array In Any Position
 */

$array = [1, 2, 3, 4, 5, 7, 8, 9];

function addElement($array, $element, $index)
{
    $new_array = [];
    foreach($array as  $key => $value )
    {
        if($index == $key)
        {
            $new_array[] = $element;
        }
            $new_array[] = $value;
        
    }
    return $new_array;
}

echo "<pre>";
    print_r(addElement($array , 6 , 5));
echo "</pre>";

/*
    -------------
        OutPut
    -------------
<pre>
    Array
    (
        [0] => 1
        [1] => 2
        [2] => 3
        [3] => 4
        [4] => 5
        [5] => 6
        [6] => 7
        [7] => 8
        [8] => 9
    )
</pre>
 */

<?php

/*
    - Implement Built Function =>  strrev()
    - Reverse This String Without Any Built In Function In PHP.
*/

/**
 * @param string $string
 * @return string
 */
function revstr(string $string): string
{
    $stringLength = strlen($string) - 1;
    $stringrev = "";

    while ($stringLength >= 0) :
        $stringrev .= $string[$stringLength];
        $stringLength--;
    endwhile;

    return $stringrev;
}

echo revstr("Mohammed"); 


/*
=========
- Output
=========
demmahoM
*/

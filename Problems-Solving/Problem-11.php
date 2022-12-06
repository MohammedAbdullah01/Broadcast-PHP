
<?php

/*
- Write a PHP Function That Checks Whether a String Is All Lowercase.
 */

/**
 * @param string $number
 * @return string
 */
function getCheckLower(string $string)
{
    for ($i = 0; $i < strlen($string); $i++):

        if (ord($string[$i]) < 97 || ord($string[$i]) > 122) {
            return false;
        }

    endfor;
    return true;
}

echo (getCheckLower(strlen("mohaMmed")));

if (getCheckLower("mohammed")) {
    echo "This a Lowercase Characters";

} else {
    echo "Not a Lowercase Characters";

}
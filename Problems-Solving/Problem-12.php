
<?php

/*
1- Write a PHP Function That Fetches All lowercase Letters [ a  From  To z ] as ASCII Code => Return Array

2- Write a PHP Function That Fetches All Uppercase Letters [ A  From  To Z ] as ASCII Code => Return Array

3- Write a PHP Function That Fetches All lowercase Letters From a String

4- Write a PHP Function That Fetches All Uppercase Letters From a String
 */

/**
 * @return array
 */

function getAsciiCodeLowercaseCharacters(): array
{
    $asciiCodeLowercaseCharacters = [];

    for ($l = 97; $l <= 122; $l++):
        $key = chr($l);
        $asciiCodeLowercaseCharacters[$key] = $l;
    endfor;

    return $asciiCodeLowercaseCharacters;
}

/**
 * @return array
 */

function getAsciiCodeUppercaseCharacters(): array
{
    $ascii_code_uppercase_characters = [];

    for ($l = 65; $l <= 90; $l++):
        $key = chr($l);
        $ascii_code_uppercase_characters[$key] = $l;
    endfor;

    return $ascii_code_uppercase_characters;
}

/**
 * @param string $value
 * @return string
 */
function getstrLowercaseLeatters(string $value): string
{
    $lower = "";
    for ($q = 0; $q < strlen($value); $q++) {

        if (in_array(ord($value[$q]), getAsciiCodeLowercaseCharacters())) {

            $letters_l = ord($value[$q]);
            $lower .= chr($letters_l);
        }
    }
    return $lower ? $lower : 'Not Found :(';
}
/**
 * @param string $value
 * @return string
 */
function getstrUppercaseLeatters(string $value): string
{
    $upper = "";
    for ($q = 0; $q < strlen($value); $q++) {

        if (in_array(ord($value[$q]), getAsciiCodeUppercaseCharacters())) {
            $letters_u = ord($value[$q]);
            $upper .= chr($letters_u);
        }
    }
    return ($upper) ? $upper : 'Not Found :(';
}

echo getstrLowercaseLeatters('mohaMMed Abdullah') . "<br>"; // mohaedbdullah
echo getstrUppercaseLeatters('MohammEd') . "<br>"; // ME
echo getstrUppercaseLeatters('mohammed'); // Not Found :(
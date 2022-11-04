<?php

/*
=============
== String ==
=============
- String Function
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required] , Delimiters[Optional])
    - str_repeat(String[Required] , Count[Required])
*/


echo lcfirst("Mohammed Abdullah") . "<br>"; // mohammed Abdullah

echo ucfirst("mohammed abdullah") . "<br>"; // Mohammed abdullah

echo strtolower("Mohammed Abdullah") . "<br>"; // mohammed abdullah

echo strtoupper("Mohammed Abdullah") . "<br>"; // MOHAMMED ABDULLAH

echo ucwords("mohammed abdullah") . "<br>"; // Mohammed Abdullah

echo ucwords("mohammed|abdullah hammad", '|') . "<br>"; // Mohammed|Abdullah hammad

echo ucwords("mohammed|abdullah|hammad", '|') . "<br>"; // Mohammed|Abdullah|Hammad

echo str_repeat("Mohammed Abdullah ", 3) . "<br>"; // Mohammed Abdullah Mohammed Abdullah Mohammed Abdullah


echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== String ==
=============
- String Function
    - implode(Separator[Optional] , Array[Required]) => Join() Is Alias
    - explode(Separator[Required] , String[Required] , Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required] , CharsList[Optional])
    - ltrim(String[Required] , CharsList[Optional])
    - rtrim(String[Required] , CharsList[Optional])
        - Space ""
        - Tab \t
        - New Line \n
        - Carriage Return \r
        - Verical Tab "\x08"
        - Null "\0"
*/

// implode
$friends = ['Mohamed', 'Karma', 'Noha', 'Ahmed', 'Sayed'];

echo implode('--', $friends); // Mohamed--Karma--Noha--Ahmed--Sayed

echo '<br>';

// explode
$message = "I Love PHP";

echo '<pre>';
print_r(explode(' ', $message, 3));
echo '</pre>';
echo '<br>';

// str_shuffle
echo str_shuffle($message);
echo '<br>';

// strrev

echo strrev($message); // PHP evoL I
echo '<br>';


echo  strlen(trim("  Mohammed  "));  // strlen => 8 trim "Mohammed"

echo '<br>';
echo  trim("@Mohammed@@@", '@');  // Mohammed
echo '<br>';
echo  rtrim("@Mohammed@@@", '@');  // @Mohammed
echo '<br>';
echo  ltrim("@Mohammed@@@", '@');  // Mohammed@@@

echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== String ==
=============
- String Function
    - chunk_split(String[Required] , Length[Optional] , End[Optional])
    - strlen(String[Required])
    - str_split(String[Required] , Length[Optional])
    - strip_tags(String[Required] , Allowed[Optional])
    - nl2br(String[Required] , XHTML[Optional])
*/

// str_split()
echo  chunk_split($message, 3, '@'); // I L@ove@ PH@P@
echo '<br>';

echo strlen('Mohammed'); // 8
echo '<br>';


// str_split()
echo '<pre>';

print_r(str_split('Mohammed'));
/*
Array
(
    [0] => M
    [1] => o
        [2] => h
        [3] => a
        [4] => m
        [5] => m
        [6] => e
        [7] => d
        )
        */

print_r(str_split('Mohammed', 3));
/*
    Array
    (
        [0] => Moh
        [1] => amm
        [2] => ed
    )
*/
echo '</pre>';
echo '<br>';


// strip_tags()
echo strip_tags('<h1>Mohammed<h1>'); // Mohammed 
echo '<br>';

echo strip_tags('<h1><b>Mohammed</b><h1>', "<b>"); // Mohammed => Allowed : Bold
echo '<br>';

// nl2br()
echo nl2br("Mohammed\nAbdullah\nHammad", false);

echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== String ==
=============
- String Function
    - strpos(String[Required] , Value[Required] , Start Position[Opthional]) Case-Sensitive
    - strrpos(String[Required] , Value[Required] , Start Position[Opthional]) Case-Sensitive
    - stripos(String[Required] , Value[Required] , Start Position[Opthional]) Case-Insensitive
    - strripos(String[Required] , Value[Required] , Start Position[Opthional]) Case-Insensitive
    - substr_count(String[Required] , Value[Required] , Start Position[Opthional] , Length[Optional])
*/

// strpos
var_dump(strpos("Hello Hello", 'H')); // 0
echo '<br>';
var_dump(strpos("Hello Hello", 'H', 3)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", 'H', 6)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", 'h')); // False
echo '<br>';
var_dump(strpos("Hello Hello", 'H', -2)); // False
echo '<br>';


// strrpos

var_dump(strrpos("Hello Hello", 'H')); // 6
echo '<br>';
var_dump(strrpos("Hello Hello", 'H', 5)); // 6
echo '<br>';
var_dump(strrpos("Hello Hello", 'H', -5)); // 6
echo '<br>';

// stripos => Case-Insensitive
var_dump(stripos("Hello Hello", 'h')); // 0
echo '<br>';
var_dump(stripos("Hello Hello", 'h', 3)); // 6
echo '<br>';
var_dump(stripos("Hello Hello", 'h', 6)); // 6
echo '<br>';
var_dump(stripos("Hello Hello", 'h')); // 0
echo '<br>';
var_dump(stripos("Hello Hello", 'H', -2)); // False
echo '<br>';


// strripos => Case-Insensitive
var_dump(strripos("Hello Hello", 'h')); // 6
echo '<br>';
var_dump(strripos("Hello Hello", 'h', 3)); // 6
echo '<br>';
var_dump(strripos("Hello Hello", 'h', 6)); // 6
echo '<br>';
var_dump(strripos("Hello Hello h", 'h')); // 12
echo '<br>';

// substr_count => Case-Sensitive
var_dump(substr_count('Hello Hello e', 'e')); // 3
echo '<br>';
var_dump(substr_count('Hello Hello E', 'e')); // 2
echo '<br>';
var_dump(substr_count('Hello Hello e', 'e', 4)); // 2
echo '<br>';
var_dump(substr_count('Hello Hello e', 'e', 4, 8)); // 1
echo '<br>';
var_dump(substr_count('Hello Hello e', 'e', 2, 6)); // 1
echo '<br>';
var_dump(substr_count('Hello Hello e', 'e', 2, 5)); // 0
echo '<br>';
var_dump(substr_count('abcdabcda', 'abcda')); // 1 => Ovar Lap String
echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== String ==
=============
- String Function
    - parse_str(String[Required] , Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required] , Length[Required] , String[optional] , Pad Flag[Optional])
        - STR_PAD_BOTH
        - STR_PAD_LEFT
        - STR_PAD_RIGHT

    strtr(String[Required] , From[Required] , To[Required])
        Or
    strtr(String[Required] , Array[Required])
    
*/

// parse_str()
parse_str('name=Mohamed&email=m@m.com&Os=Mac', $array);

echo "<pre>";
print_r($array);
/*
Array
(
    [name] => Mohamed
    [email] => m@m.com
    [os] => Mac
)
*/
echo "</pre>";

echo $array['name']  . "<br>"; // Mohamed
echo $array['email'] . "<br>"; // m@m.com
echo $array['Os']      . "<br>"; // Mac
echo '<br>';
echo "\\*==============================*\\<br>";

// quotemeta()
echo "Hello [] () + - * <br>"; // Hello [] () + - *
echo quotemeta("Hello [] () + - * <br>"); // Hello \[\] \(\) \+ - \*

echo '<br>';
echo "\\*==============================*\\<br>";

// str_pad()

echo str_pad('12', 6, 0) . "<br>"; // 120000

echo str_pad('123', 6, 0) . "<br>"; // 123000

echo str_pad('1234', 6, 0) . "<br>"; // 123400

echo str_pad('12345', 6, 0) . "<br>"; // 123450

// Othar Example

echo str_pad('12', 6, 0, STR_PAD_BOTH) . "<br>"; // 001200

echo str_pad('123', 6, 0, STR_PAD_BOTH) . "<br>"; // 012300

echo str_pad('1234', 6, 0, STR_PAD_LEFT) . "<br>"; // 001234

echo str_pad('12345', 6, 0, STR_PAD_LEFT) . "<br>"; // 012345

echo '<br>';
echo "\\*==============================*\\<br>";


// strtr()

echo strtr("Mo%ammed Abdulla%", '%', 'h') . "<br>";

// OR

$translation = ['@' => 'M', '!' => 'a', '$' => 'd'];

echo strtr('@oh!mme$ Ab$ull!h',  $translation) . "<br>";

echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== String ==
=============
- String Function
    - str_replace(Find[Required] , Replace With[Required] , Data[Required] , Replace Count[Optional]) Its Case Sensitive 
    - str_ireplace(Find[Required] , Replace With[Required] , Data[Required] , Replace Count[Optional])
*/

// str_replace Case Sensitive 
echo str_replace('#', 'M', '#oha#ed') . "<br>"; // MohaMed
echo str_replace('#', 'M', '#oha#ed', $repalces_count) . "<br>"; // MohaMed
echo "Replaces Count Is {$repalces_count} <br>"; // Replaces Count Is 2

echo str_replace(['@', '#'], 'A', 'Moh#@med') . "<br>"; // MohAAmed

echo str_replace(['@', '#'], ['m', 'a'], 'Moh#@@ed') . "<br>"; // Mohammed

echo "<pre>";
print_r(str_replace('One', 1, ['One', 'Two', 'Three', 'One', 'One']));
/* 
Array
(
    [0] => 1
    [1] => Two
    [2] => Three
    [3] => 1
    [4] => 1
)
*/
echo "</pre>";


echo "<pre>";
print_r(str_replace(['One', 'Two'], [1, 2], ['One', 'Two', 'Three', 'One', 'One']));
/* 
Array
(
    [0] => 1
    [1] => 2
    [2] => Three
    [3] => 1
    [4] => 1
)
*/
echo "</pre>";


echo "<pre>";
print_r(str_replace(['One', 'Two'], [1], ['One', 'Two', 'Three', 'One', 'One']));
/* 
Array
(
    [0] => 1
    [1] => 
    [2] => Three
    [3] => 1
    [4] => 1
)
*/
echo "</pre>";


echo "<pre>";
print_r(str_replace(['one', 'two'], [1, 2], ['One', 'Two', 'Three', 'One', 'One']));
/* 
Array
(
    [0] => One
    [1] => Two
    [2] => Three
    [3] => One
    [4] => One
)
*/
echo "</pre>";


// str_ireplace Case Insensitive 

echo "<pre>";
print_r(str_ireplace(['one', 'two'], [1, 2], ['One', 'Two', 'Three', 'One', 'One']));
/* 
Array
(
    [0] => 1
    [1] => 2
    [2] => Three
    [3] => 1
    [4] => 1
)
*/
echo "</pre>";

echo '<br>';
echo "\\*==============================*\\<br>";

/*
=============
== String ==
=============
- String Function
    - wordwrap(String[Required] , Width[Optional = 75] , Break_Char[Optional = "\n"] , Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required] , String_Two[Required] , Percent[Optional])
        Returns The Number Of Matching Characters
*/

// wordwrap
$str = "Welcome To Google Website";
echo wordwrap($str, 5, "<br>");
/*
Welcome
To
Google
Website
*/

echo '<br>';
echo "\\*==============================*\\<br>";

// ord
echo ord('a'); // 97
echo '<br>';
echo ord('A'); // 65
echo '<br>';
echo "\\*==============================*\\<br>";

// chr
echo chr(65); // A
echo '<br>';
echo chr(97); // a
echo '<br>';
echo "\\*==============================*\\<br>";

// similar_text

echo similar_text('Mohamed', 'mohamed', $perc1); // 6
echo '<br>';
echo similar_text('Moh_#amed', 'Moha!&med'); // 7
echo '<br>';
echo similar_text('Mohamed', 'Mohamed', $perc2); // 7
echo '<br>';
echo $perc1; // Percentage  => %85.714285714286
echo '<br>';
echo $perc2; // Percentage  => %100

echo '<br>';
echo "\\*==============================*\\<br>";


/*
=============
== String ==
=============
- String Function
    - strstr(String[Required] , Search[Required] , Before_Search[Optional] = False) => Alias [strchr] & Case-Sensitive
    - stristr(String[Required] , Search[Required] , Before_Search[Optional] = False)  Case-Insensitive
    - number_format(Number[Required] , Decimals[Optional] , Decimal_String[Optional] , Separator[Optional])
*/

// strstr Case Sensitive
echo strstr("Hello Mohammed", 'M') . "<br>"; // Mohammed
echo strstr("Hello Mohammed", 'l') . "<br>"; // llo Mohammed
echo strstr("Hello Mohammed", 'M', true) . "<br>"; // Hello 

// stristr Insensitive

echo stristr("Hello Mohammed", 'm') . "<br>"; // Mohammed
echo stristr("Hello Mohammed", 'L') . "<br>"; // llo Mohammed
echo stristr("Hello Mohammed", 'm', true) . "<br>"; // Hello 

//  number_format

echo number_format(100000000.4545455) . "<br>";
echo number_format(100000000.4545455, 3, "#") . "<br>";
echo number_format(100000000.4545455, 3, "#", '@') . "<br>";

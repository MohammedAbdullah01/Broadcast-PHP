<?php

/*
=======================
== Filter Functions ==
=======================
- filter_list()
    - Return A List Of All Supported Filters

- filter_id(Filter_Name[Required])
    - Returns the filter ID belonging to a named filter

- filter_var(Value[Required] , Filter[Optional] , Options[Optional]) 
    - Filters a variable with a specified filter
*/


// filter_list
echo "<pre>";
print_r(filter_list());
/*
Array
(
    [0] => int
    [1] => boolean
    [2] => float
    [3] => validate_regexp
    [4] => validate_domain
    [5] => validate_url
    [6] => validate_email
    [7] => validate_ip
    [8] => validate_mac
    [9] => string
    [10] => stripped
    [11] => encoded
    [12] => special_chars
    [13] => full_special_chars
    [14] => unsafe_raw
    [15] => email
    [16] => url
    [17] => number_int
    [18] => number_float
    [19] => add_slashes
    [20] => callback
)
*/
echo "</pre>";



// filter_id
echo filter_id("int")                   . "<br>"; // 257
echo filter_id("boolean")               . "<br>"; // 258
echo filter_id("float")                 . "<br>"; // 259
echo filter_id("validate_regexp")       . "<br>"; // 272
echo filter_id("validate_domain")       . "<br>"; // 277
echo filter_id("validate_url")          . "<br>"; // 273
echo filter_id("validate_email")        . "<br>"; // 274
echo filter_id("validate_ip")           . "<br>"; // 275
echo filter_id("validate_mac")          . "<br>"; // 276
echo filter_id("string")                . "<br>"; // 513
echo filter_id("stripped")              . "<br>"; // 513 
echo filter_id("encoded")               . "<br>"; // 514
echo filter_id("special_chars")         . "<br>"; // 515
echo filter_id("full_special_chars")    . "<br>"; // 522
echo filter_id("unsafe_raw")            . "<br>"; // 516
echo filter_id("email")                 . "<br>"; // 517
echo filter_id("url")                   . "<br>"; // 518
echo filter_id("number_int")            . "<br>"; // 519
echo filter_id("number_float")          . "<br>"; // 520
echo filter_id("add_slashes")           . "<br>"; // 523
echo filter_id("callback")              . "<br>"; // 1024

echo "\\*==============================*\\<br>";


/*
=======================
== Filter Functions ==
=======================
- filter_var(Value[Required] , Filter[Optional] , Options[Optional]) 
    - Validate Filters

        - FILTER_VALIDATE_BOOL => [TRUE , 1 , YES , ON]
            - Flag => FILTER_NULL_ON_FAILURE

        - FILTER_VALIDATE_URL
            - Flag => FILTER_NULL_ON_FAILURE
            - Flag => FILTER_FLAG_PATH_REQUIRED
            - Flag => FILTER_FLAG_QUERY_REQUIRED

        - FILTER_VALIDATE_IP
            - Flag => FILTER_NULL_ON_FAILURE
            - Flag => FILTER_FLAG_IPV4
            - Flag => FILTER_FLAG_IPV6

        - FILTER_VALIDATE_MAC
            - Flag =>FILTER_NULL_ON_FAILURE
*/



// FILTER_VALIDATE_BOOL
$boolTrue  = "True"; // "True" , True || "1" , 1 || "ON" || "Yes" => Return True
$boolFalse = "0"; // "False" , False || "0" , 0 || "Off" || "No" => Return False
$bool = "Mohammed";

var_dump(filter_var($boolTrue, FILTER_VALIDATE_BOOL)); // true 
echo "<br>";
var_dump(filter_var($boolFalse, FILTER_VALIDATE_BOOL)); // false 
echo "<br>";

// FILTER_VALIDATE_BOOL => Flag
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)); // Null 

echo "<br>";
echo "\\*==============================*\\<br>";


// FILTER_VALIDATE_URL

$url     = "https://google.com";

$urlFail = "abcdefg.com";

$urlPath = "https://google.com/Category";

$urlQuery = "https://google.com/?category=product";

var_dump(filter_var($url, FILTER_VALIDATE_URL)); // string(18) "https://google.com"
echo "<br>";

// Flags
var_dump(filter_var($urlFail, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
var_dump(filter_var($urlPath, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)); // string(27) "https://google.com/Category"
echo "<br>";
var_dump(filter_var($urlQuery, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)); // string(35) "https://google.com?category=product"
echo "<br>";

// Used All Flags
$urlFull = "https://google.com/?id=100";
var_dump(filter_var(
    $urlFull,
    FILTER_VALIDATE_URL,
    [
        "flags" => FILTER_NULL_ON_FAILURE |
            FILTER_FLAG_PATH_REQUIRED |
            FILTER_FLAG_QUERY_REQUIRED
    ]
)); // string(26) "https://google.com/?id=100" 

echo "<br>";
echo "\\*==============================*\\<br>";



// FILTER_VALIDATE_IP
$ip     = "192.168.1.1";
$ipFail = "19tr2.168.1.1";
$ipV4   = "192.0.2.235";
$ipV6   = "2001:0db8:0000:0000:0000:8a2e:0370:7334";

var_dump(filter_var($ip, FILTER_VALIDATE_IP)); // string(11) "192.168.1.1"
echo "<br>";
var_dump(filter_var($ipFail, FILTER_VALIDATE_IP)); // False
echo "<br>";

// Flags
var_dump(filter_var($ipFail, FILTER_VALIDATE_IP, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
var_dump(filter_var($ipV4, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)); // string(11) "192.0.2.235"
echo "<br>";
var_dump(filter_var($ipV6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)); // string(39) "2001:0db8:0000:0000:0000:8a2e:0370:7334"
echo "<br>";

// Used All Flags
var_dump(filter_var(
    $ipV6,
    FILTER_VALIDATE_IP,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]
)); // string(39) "2001:0db8:0000:0000:0000:8a2e:0370:7334"

echo "<br>";
echo "\\*==============================*\\<br>";




// FILTER_VALIDATE_MAC
$mac     = "0000.0ABB.28FC";
$macFail = "0000.0ABB.28FCddsdsdsd";

var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); // string(14) "0000.0ABB.28FC"
echo "<br>";
var_dump(filter_var($macFail, FILTER_VALIDATE_MAC)); // false
echo "<br>";

//Flags
var_dump(filter_var($macFail, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
echo "\\*==============================*\\<br>";




/*
=======================
== Filter Functions ==
=======================
- filter_var(Value[Required] , Filter[Optional] , Options[Optional]) 
    - Validate Filters

        - FILTER_VALIDATE_EMAIL 
            - Flag => FILTER_NULL_ON_FAILURE

        - FILTER_VALIDATE_INT
            - Flag    => FILTER_NULL_ON_FAILURE
            - Options => min_range
            - Options => max_range
            - Convert To Int On Success

        - FILTER_VALIDATE_FLOAT
            - Flag    => FILTER_NULL_ON_FAILURE
            - Options => min_range
            - Options => max_range
            - Convert To Float On Success
*/


// FILTER_VALIDATE_EMAIL
$email     = "Mohammed@gmail.comsadad";
$emailFail = "Mohammedgmail.com";

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); // string (18) "Mohammed@gmail.com"
echo "<br>";
var_dump(filter_var($emailFail, FILTER_VALIDATE_EMAIL)); // False
echo "<br>";
var_dump(filter_var($emailFail, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)); // Null
echo "<br>";



// FILTER_VALIDATE_INT
$int       = "280";
$intFail   = "280sswe";

var_dump(filter_var($int, FILTER_VALIDATE_INT)); // int(280)
echo "<br>";
var_dump(filter_var($intFail, FILTER_VALIDATE_INT)); // bool(false)
echo "<br>";

// Flags
var_dump(filter_var($intFail, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE)); // Null
echo "<br>";

// Options
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    [
        "flags"   => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 200, "max_range" =>  270]
    ]
)); // Null

echo "<br>";

var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    [
        "flags"   => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 200, "max_range" =>  280]
    ]
)); // int(280)
echo "<br>";


echo "\\*==============================*\\<br>";


// FILTER_VALIDATE_FLOAT
$float     = "100.15";
$floatFail = "100.15sads";


var_dump(filter_var($float, FILTER_VALIDATE_FLOAT)); // float(100.15)
echo "<br>";
var_dump(filter_var($floatFail, FILTER_VALIDATE_FLOAT)); // bool(false)
echo "<br>";

// Flags
var_dump(filter_var($floatFail, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE)); // Null
echo "<br>";

// Options
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    [
        "flags"   => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 50.50, "max_range" =>  90.50]
    ]
)); // Null

echo "<br>";

var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    [
        "flags"   => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 50.50, "max_range" =>  100.15]
    ]
)); // float(100.15)
echo "<br>";
echo "\\*==============================*\\<br>";





/*
=======================
== Filter Functions ==
=======================
- filter_var(Value[Required] , Filter[Optional] , Options[Optional]) 
    - Sanitize Filters

        - FILTER_SANITIZE_EMAIL 
            - Remove All But Letters + Digits + !#$&'*+-=?^_`{|}~@.[]
            - Test

        - FILTER_SANITIZE_INT
            - Remove All But Digits, + -

        - FILTER_SANITIZE_FLOAT
            - Remove All But Digits, +, - And Optionally [. , eE]
            - Flags   => FILTER_FLAG_ALLOW_THOUSAND => , 
            - Flags   => FILTER_FLAG_ALLOW_FRACTION => .

        - FILTER_SANITIZE_URL
            - Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=
            - Test
*/


// FILTER_SANITIZE_EMAIL
$email2 = "Mohamed      @gmail.com";
var_dump(filter_var($email2, FILTER_SANITIZE_EMAIL)); // string(17) "Mohamed@gmail.com"
echo "<br>";


// FILTER_SANITIZE_INT
$int2 = 100;
var_dump(filter_var($int2, FILTER_SANITIZE_NUMBER_INT)); // string(3) "100"
echo "<br>";
$int3 = "100 + !@#$%^100";
var_dump(filter_var($int3, FILTER_SANITIZE_NUMBER_INT)); // string(7) "100+100"
echo "<br>";


// FILTER_SANITIZE_FLOAT
$float2 = "1,250,150.5415";

var_dump(filter_var(
    $float2,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
)); // string(14) "1,250,150.5415"
echo "<br>";



// FILTER_SANITIZE_URL
$url2 = "https://    google       .com";
var_dump(filter_var($url2, FILTER_SANITIZE_URL)); // string(18) "https://google.com"
echo "<br>";

echo "\\*==============================*\\<br>";



/*
=======================
== Filter Functions ==
=======================
- filter_input(Type [Required] , Value[Required] , Filter[Optional] , Options[Optional])

    - INPUT_GET
    - INPUT_POST
    - INPUT_COOKIE
    - INPUT_SERVER
    - INPUT_ENV

- FILTER_VALIDATE_INT
- FILTER_NULL_ON_FAILURE
*/

echo filter_input(INPUT_GET, "number", FILTER_VALIDATE_INT);
echo filter_input(INPUT_GET, "number", FILTER_SANITIZE_NUMBER_INT);
echo filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
echo filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

?>


<form action="" method="get">
    <input type="text" name="number">
    <input type="submit" value="Send">
</form>

<form action="" method="POST">
    <input type="text" name="email">
    <input type="submit" value="Send">
</form>
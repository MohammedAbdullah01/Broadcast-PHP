<?php

/*
    =====================
    == Cookies ==
    =====================
    - setcookie(Name[Required] , Value[Optional] , expires[Optional] , Path[Optional] , Domain[Optinal] , Secure[Optional] , Http_Only[Optional])
        - Name
        - Value
        - Expires
        - Path
        - Domain
        - Secure
        - Http_Only

    - Important
        - Do Not Store Sensitive Informition
        - Not Everything Saved To Cookies
 */


// setcookie()

// Name & Value
setcookie("Style", "DarkStyle"); // Cookies => Expires When You Lock Your Browser 

// Name & Value & Expires
setcookie("Auth", rand(), time() + 60 * 60 * 24 * 30); // Cookies => Expires Of One Month 
// OR
setcookie("Auth2", rand(), strtotime("+1 Month")); // Cookies => Expires Of One Month 

// Name & Value & Expires & path
setcookie("POPUP", "POPUP Message", strtotime("+5 Day"), "/"); // Cookies => Available In The Whole Domain => http://broadcast.test



echo "<pre>";
print_r($_COOKIE);

/*
Array
(
    [Style] => DarkStyle
    [Auth] => 430794833
)
*/
echo "</pre>";

echo "Cookie Value =>  {$_COOKIE["POPUP"]}"; // DarkStyle




// Example 1 =>  Change The Background Color Of The Page By Reading The Color From 

if (isset($_COOKIE['background'])) {
    echo "<style> body { background:" . $_COOKIE['background'] . "}</style>";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 Day"));
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
echo '<br>';

echo "\\*==============================*\\<br>";
?>

<form action="" method="post">
    <input type="color" name="bg-color">
    <input type="submit" value="Change Color">
</form>

<?php






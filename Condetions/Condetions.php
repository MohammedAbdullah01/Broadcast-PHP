<?php

/*
    ========================
    == Control Structure ==
    ========================
    - Syntax
        - if  
        - Elseif 
        - Else  
 */
//  Example 1
if (10 > 5) {
    echo 'Yes';
} else {
    echo 'No';
}
echo '<br>';

//  Example 2
if (10 > 10) {
    echo 'First Condition';
} elseif (10 > 5) {
    echo 'Second Condition';
} else {
    echo 'No';
}
echo '<br>';

//  Example 3

$page = "Home";

if ($page == 'About') {
    echo "This Is The Page About";
}


//  Example 4

$lang = 'Arabic';

if ($lang == "Arabic") {
    echo "مرحبا بك";
} elseif ($lang == "English") {
    echo "Hello";
} elseif ($lang == "Spanish") {
    echo "Holla";
} else {
    echo 'Unknown Language';
}
echo '<br>';

//  Example 4

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['lang'] == 'ar') {
        // header("Location:ar.php");

    } elseif ($_POST['lang'] == 'en') {
        // header("Location:en.php");
    } else {
        // header("Location:Home.php");
    }
}

echo "\\*==============================*\\<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="sp">Spanish</option>
        </select>
        <input type="submit" value="Send">
    </form>

</body>

</html>


<?php
echo "\\*==============================*\\<br>";
/*
    ========================
    == Control Structure ==
    ========================
    - Alternate Syntax
        - if  
        - Elseif 
        - Else  
 */


//  Example 5 => Not Alternate

if (10 > 5) echo "Good";
else echo "Bad";
echo '<br>';
echo "\\*==============================*\\<br>";

//  Example 6 =>  Alternate

if (10 > 5) : ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        Hello Page
    </body>

    </html>

<?php endif;
echo '<br>';
echo "\\*==============================*\\<br>";
?>

<?php
//  Example 7 =>  Alternate

if (10 > 5) :
    echo "First";

elseif (10 > 8) :

    echo "Second";

else :
    echo "Not Resualt";

endif;

echo '<br>';
echo "\\*==============================*\\<br>";


/*
    ========================
    == Control Structure ==
    ========================
    - Nested If Condation And Training
 */

$name             = 'Mohammed';
$is_student       = true;
$is_orphan        = true;
$contry           = "Egypt";
$price            = 100;
$country_discount = 50;
$student_discount = 15;
$orphan_discount  = 15;

if ($contry == "Egypt") {
    if ($is_student == true) {

        if ($is_orphan == true) {
            echo "Hello $name";
            echo "<br>";
            echo "Country Discount $country_discount";
            echo "<br>";
            echo "Is Student Discount $student_discount";
            echo "<br>";
            echo "Orphan Discount $orphan_discount";
            echo "<br>";
            echo "This Final Price Is " .  $price - $country_discount - $student_discount - $orphan_discount;
            echo "<br>";
        } else {
            echo "Hello $name";
            echo "<br>";
            echo "Country Discount $country_discount";
            echo "<br>";
            echo "Is Student Discount $student_discount";
            echo "<br>";
            echo "This Final Price Is " .  $price - $country_discount - $student_discount;
            echo "<br>";
        }
    } else {
        echo "Hello $name";
        echo "<br>";
        echo "Country Discount $country_discount";
        echo "<br>";
        echo "This Final Price Is " .  $price - $country_discount;
        echo "<br>";
    }
} else {
    echo "Hello $name";
    echo "<br>";
    echo "No Discount";
    echo "<br>";
    echo "This Final Price Is $price";
    echo "<br>";
}

echo '<br>';
echo "\\*==============================*\\<br>";

/*
    ========================
    == Control Structure ==
    ========================
    - Ternary Operator Short If
 */

$a = 10;

echo $a > 8 ? "Good" : "Bad";
echo '<br>';

$b = 5;

$result = $b > 10 ? "Good" : "Bad";

echo "Ilove PHP Because Its A {$result} Language";

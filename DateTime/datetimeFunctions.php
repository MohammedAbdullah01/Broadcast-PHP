<?php

/*
==============================
== Date And Time Functions ==
==============================
    - date_default_timezone_get()
        - Gets the default timezone used by all date/time functions in a script

    - date_default_timezone_set(Timezone[Required])
        - Sets the default timezone used by all date/time functions in a script

    - date_create(Date/Time[Optional] , Timezone[Optional])
        - Returns new DateTime object
        - Time: Date/Time String || current Time If Null
        - Timezone: Timezone String || current Timezone

    - timezone_open(Timezone[Required])
        - Creates new DateTimeZone object

    - checdata(M , D , Y) => All Required
        - Validate A Gregorian Date

    - Will Cover Later
        - date()
        - date_format()

    - Search
        - List Of Supported Timezones
*/


// Get Timezone
echo date_default_timezone_get() . "<br>"; // Europe/Berlin

// Print Date And Time
echo date("Y-m-d H:i:s") . "<br>"; // 2022-11-29 22:52:271

// Change Timezone
date_default_timezone_set("Africa/Cairo") . "<br>";

// Get Timezone Again
echo date_default_timezone_get() . "<br>"; // Africa/Cairo

// Print Date And Time Again
echo date("Y-m-d H:i:s") . "<br>"; // 2022-11-29 23:57:30


// date_create

echo "<pre>";
print_r(date_create());
/*
DateTime Object
(
    [date] => 2022-11-29 22:45:49.627416
    [timezone_type] => 3
    [timezone] => Europe/Berlin
)
*/
echo "</pre>";

// Create Date Object
$date = date_create("", timezone_open("Europe/Berlin"));

// Echo Date With Format
echo date_format($date, "Y-m-d H:i:s") . "<br>";

// Check Date

var_dump(checkdate(10, 10, 2021)); // bool(true) 
echo "<br>";

var_dump(checkdate(20, 45, 2021)); // bool(false)
echo "<br>";

echo "\\*==============================*\\<br>";





/*
==============================
== Date And Time Functions ==
==============================
    - date_format()
        - Returns date formatted according to given format

    - [Year]
        - Y => Four Digits
        - y => Two  Digits

    - [Month]
        - m => 01-12
        - M => Text Month => 3 Letters
        - F => Full Text
        - t => Number Of Days In This Month

    - [Day]
        - d => Day Of The Month 01-31
        - j => Day Without Leading Zero 
        - D => Text Day => 3 Letters
        - l => Full Text 
        - z => Day Of The Year 0-365
        - S => st , rd , nth Suffix For Day Of The Month 

    - [Time]
        - a => Small am/pm
        - A => Capital AM/PM

    - [Hour]
        - g => 1-12
        - G => 0-23
        - h => 01-12
        - H => 00-23

    - [Minutes , Seconds , Micro]
        - i => 00-59
        - s => 00-59
        - u => Microseconds
*/

$date2 = date_create("2022-11-05 01:20:09");

// Year
echo date_format($date2, "Y") . "<br>"; // 2022
echo date_format($date2, "y") . "<br>"; // 22

// Month
echo date_format($date2, "m") . "<br>"; // 11
echo date_format($date2, "M") . "<br>"; // Nov
echo date_format($date2, "F") . "<br>"; // November
echo date_format($date2, "T") . "<br>"; // EET

// Day
echo date_format($date2, "d") . "<br>"; // 05
echo date_format($date2, "j") . "<br>"; // 5
echo date_format($date2, "D") . "<br>"; // Sat
echo date_format($date2, "l") . "<br>"; // Saturday
echo date_format($date2, "z") . "<br>"; // 308
echo date_format($date2, "S") . "<br>"; // th

// Time
echo date_format($date2, "a") . "<br>"; // am
echo date_format($date2, "A") . "<br>"; // AM

// Hour
echo date_format($date2, "g") . "<br>"; // 1
echo date_format($date2, "G") . "<br>"; // 1
echo date_format($date2, "h") . "<br>"; // 01
echo date_format($date2, "H") . "<br>"; // 01

// Minutes , Seconds , Micro
echo date_format($date2, "i") . "<br>"; // 20
echo date_format($date2, "s") . "<br>"; // 09
echo date_format($date2, "u") . "<br>"; // 397584

echo "<br>";

echo "\\*==============================*\\<br>";



/*
==============================
== Date And Time Functions ==
==============================
    - date_interval_create_from_date_string()
        - Alias of DateInterval::createFromDateString

    - date_add(Timezone[Required])
        - Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object

    - date_sub(Date/Time[Optional] , Timezone[Optional])
        - Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object

    - date_modify(Timezone[Required])
        - Alters the timestamp
*/

$date3 = date_create("2022-11-30 02:35:59");
echo date_format($date3, "Y-m-d H:i:s a") . "<br>"; // 2022-11-30 02:35:59 am

// Add Date
date_add($date3, date_interval_create_from_date_string("3 months"));
echo date_format($date3, "Y-m-d H:i:s a") . "<br>"; // 2023-03-02 02:35:59 am

date_add($date3, date_interval_create_from_date_string("1 Year 6 month 5 day"));
echo date_format($date3, "Y-m-d H:i:s a") . "<br>"; // 2024-09-07 02:35:59 am

// Sub Date
date_sub($date3, date_interval_create_from_date_string("2 month"));
echo date_format($date3, "Y-m-d H:i:s a") . "<br>"; // 2024-07-07 02:35:59 am

// Modify Date
date_modify($date3, "+1 Year +1 Month +3 day");
echo date_format($date3, "Y-m-d H:i:s a"); // 2025-08-10 02:35:59 am


echo "<br>";

echo "\\*==============================*\\<br>";







/*
==============================
== Date And Time Functions ==
==============================
    - time()
        - Return current Unix timestamp => Unix Timestamp => Seconds Since 01 Jan 1970

    - getdate()
        - Get date/time information

    - date_parse()
        - Returns associative array with detailed info about given date
*/

// time()
echo time()                      . " Unix Timestamp<br>"; // 1669769573
echo time() / 60                 . " Minutes<br>"; // 27829495.15 
echo time() / 60 / 60            . " Hours<br>"; // 463824.91916667
echo time() / 60 / 60 / 24       . " Days<br>"; // 19326.039155093
echo time() / 60 / 60 / 24 / 365 . " Years<br>"; // 52.948053716388


// getdate()
$date4 = getdate();
echo "<pre>";
print_r($date4);
/*
Array
(
    [seconds] => 55
    [minutes] => 0
    [hours] => 3
    [mday] => 30
    [wday] => 3
    [mon] => 11
    [year] => 2022
    [yday] => 333
    [weekday] => Wednesday
    [month] => November
    [0] => 1669770055
)
*/
echo "</pre>";

echo $date4['seconds']  . "<br>"; // 2
echo $date4['hours']    . "<br>"; // 3
echo $date4['weekday']  . "<br>"; // Wednesday
echo $date4['month']    . "<br>"; // November


// date_parse => with detailed info about given date
echo "<pre>";
print_r(date_parse("1997-8-16 45:50:20 ")); // Unexpected character => 45
/*
Array
(
    [year] => 1997
    [month] => 8
    [day] => 16
    [hour] => 5
    [minute] => 50
    [second] => 20
    [fraction] => 0
    [warning_count] => 0
    [warnings] => Array
        (
        )

    [error_count] => 1
    [errors] => Array
        (
            [10] => Unexpected character
        )

    [is_localtime] => 
)
*/
echo "</pre>";

echo "<br>";

echo "\\*==============================*\\<br>";







/*
==============================
== Date And Time Functions ==
==============================
    - date_diff()
        - Returns the difference between two DateTime objects

    - strtotime(DateTime[Required] , Base[Optional])
        - Parse about any English textual datetime description into a Unix timestamp
*/

$first_date  = date_create("1995-9-15 10:50:55");
$now_date = date_create();

// date_diff()
$Calculate_your_age  = date_diff($first_date, $now_date);
echo "<pre>";
print_r($Calculate_your_age);
/*
DateInterval Object
(
    [y] => 27
    [m] => 2
    [d] => 14
    [h] => 16
    [i] => 28
    [s] => 57
    [f] => 0.818084
    [weekday] => 0
    [weekday_behavior] => 0
    [first_last_day_of] => 0
    [invert] => 0
    [days] => 9937
    [special_type] => 0
    [special_amount] => 0
    [have_weekday_relative] => 0
    [have_special_relative] => 0
)
*/
echo "</pre>";

echo "I'm Live. {$Calculate_your_age->y} Years <br>"; //I'm live. 27 Years
echo "I'm Live. {$Calculate_your_age->days} Days <br>"; //I'm live. 9937 Days


// strtotime()
echo date("Y-m-d H:i:s" , strtotime("next Friday")) . "<br>"; // 2022-12-02 00:00:00
echo date("Y-m-d H:i:s" , strtotime("+1 year"))     . "<br>"; // 2023-11-30 03:37:06
echo date("Y-m-d Y M D H:i:s" , strtotime("Tomorrow" , strtotime("1995-8-16")))     . "<br>"; // 1995-08-17 1996 Aug Thu  00:00:00






echo "<br>";

echo "\\*==============================*\\<br>";

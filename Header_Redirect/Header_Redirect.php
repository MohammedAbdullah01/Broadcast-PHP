<?php

/*
    ==============
    == Header ==
    ==============
    - Send Raw Http Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download 

        - header(Header[Required] , Replace[Optional] = True , Response_Code[Optional] )
 */

// header("HTTP/1.0 404 Not Found"); // Request Raw Header From HTTP To Show That The Page Does Not Found

// header("expires: Sat, 01 Jan 2022 01:00:00"); // expires Cache =>  Sat, 01 Jan 2022 01:00:00
// header("cache-control: no-cache, must-revalidate"); // Do Not Use Cache And Revalidate

// echo "<a href='test.php'>Test</a>"; // Go To Page => test.php , When reversing Will use History  The page you were transferred from for your reference    

// header("Location:test.php"); // There Is No History And When You Go Back You Will Go Back From The Previous Page


// header("Refresh:5; url=test.php"); // Transfer to page test.php => after 5 seconds and when you return you will return from the previous page and not => Header_Redirect.php not use the History

/*
========================
a very important note 
========================
- After using the =>  header(); 
You should use exit;
To stop the script working , Special for Security because he can read anything after the header(); If not used exit;  

*/
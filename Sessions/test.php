<?php

session_start();

if(isset($_SESSION['Name'])){

    echo "Welcome =>  {$_SESSION['Name']} <br> And Your Id => {$_SESSION['Id']} ";
    
    echo "Views Count => {$_SESSION['views']}";
}else{
    header("Location:Sessions.php");
}
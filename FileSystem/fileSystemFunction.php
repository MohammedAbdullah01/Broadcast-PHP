<?php

/*
============================
== File System Functions ==
============================
- disk_total_space()
    - Get Total Space In Bytes => Then We Can Get [KB , MB , GB]

- disk_free_space() || diskfreespace()
    - Get Free Space In Bytes => Then We Can Get [KB , MB , GB]

- file_exists(Path)
    - Check If A File Or Directory Exists

- filesize(File_Name)
    - Get Space In Bytes
*/

echo disk_total_space("C:");
echo "<br>";

echo disk_FREE_space("C:");
echo "<br>";

var_dump(file_exists('test.text')); // bool(true)
echo "<br>";
var_dump(file_exists('tests.txt')); // bool(false)
echo "<br>";

echo filesize('test.txt'); // 28
echo "<br>";


echo "\\*==============================*\\<br>";



/*
============================
== File System Functions ==
============================
- is_dir(Name)
    - Tells Whether The Filename Is A Directory

- mkdir(Path[Required] , Mode[Optional] = 0777 , Recursive[Optional] , Context[Optional]) 
    - Makes directory

    - Mode Default => 0777 
        - Permissions Is Ignored On Windows
        - Permissions Is Octal Number Start With 0 
            - Second Number Is => Owner Permission
            - Third Number Is  => User Group Permission
            - Fourth Number Is => Others Permissions

                ----------	0000	no permissions
                -rwx------	0700	read, write, & execute only for owner
                -rwxrwx---	0770	read, write, & execute for owner and group
                -rwxrwxrwx	0777	read, write, & execute for owner, group and others
                ---x--x--x	0111	execute
                --w--w--w-	0222	write
                --wx-wx-wx	0333	write & execute
                -r--r--r--	0444	read
                -r-xr-xr-x	0555	read & execute
                -rw-rw-rw-	0666	read & write
                -rwxr-----	0740	owner can read, write, & execute; group can only read; others have no permissions

- rmdir(Path[Required] , Context[OPtional])
    - Removes directory

*/
// is_dir
var_dump(is_dir(__DIR__)); // bool(true)
echo "<br>";

// mkdir
if (!file_exists("Test")) {
    mkdir("Test"); //  Created Directory Test
}

if (!file_exists("Tests/Uploads/Files")) {
    mkdir("Tests/Uploads/Files", 0700, true); // Created Directory Test => Upoloads => Files
}


// rmdir
if (file_exists("Tests/Uploads/Files")) {
    rmdir("Tests/Uploads/Files"); // Remove Directory Files Required Dir Empty 
}
echo "<br>";
if (file_exists("Tests/Uploads")) {
    rmdir("Tests/Uploads"); // Remove Directory Uploads Required Dir Empty 
}

echo "\\*==============================*\\<br>";





/*
============================
== File System Functions ==
============================
- chmod(File[Required] , Mode[Required])
    - Changes File Mode

- fileperms(File[Required])
    - Gets File Permissions

- clearstatcache(Path)
    - Clear Cache

- Search
    - You Can Change Owner chown()
    - You Can Change Group chgrp()

*/

// mkdir('Y' , 0700);

// fileperms
echo fileperms("Y");
echo "<br>";

// chmod
chmod("Y", 0644);

clearstatcache(); // Clear Cache

// fileperms
echo fileperms("Y");
echo "<br>";

echo "\\*==============================*\\<br>";




/*
============================
== File System Functions ==
============================
- basename(Path [Required] , Suffix[Required])
    - Returns Trailing Name Component Of Path

- dirname(Path [Required] , Levels[Optional] = 1)
    - Return A Parent Directory's Path
    - Levels => Number Of Parent Directories To Go Up 

- realpath(Path[Required])
    - Returns Absolute Path

- pathinfo(Path[Required] , Flags[Optional]) => Return Array 
    - Flags
        - PATHINFO_DIRNAME
        - PATHINFO_BASENAME
        - PATHINFO_EXTENSION
        - PATHINFO_FILENAME
*/

// basename

echo  basename(__FILE__) . "<br>"; // fileSystemFunction.php
echo "<br>";
echo  basename(__FILE__, ".php") . "<br>"; // fileSystemFunction
echo "<br>";

// dirname
echo  dirname(__FILE__, 1) . "<br>"; // C:\xampp\htdocs\BroadCastPhp\FileSystem
echo  dirname(__FILE__, 2) . "<br>"; // C:\xampp\htdocs\BroadCastPhp
echo  dirname(__FILE__, 3) . "<br>"; // C:\xampp\htdocs\
echo  dirname(__FILE__, 4) . "<br>"; // C:\xampp



// realpath
echo realpath(__FILE__) . "<br>"; // C:\xampp\htdocs\BroadCastPhp\FileSystem\fileSystemFunction.php
echo "<pre>";
print_r(pathinfo(__FILE__));
/*
Array
(
    [dirname]   => C:\xampp\htdocs\BroadCastPhp\FileSystem
    [basename]  => fileSystemFunction.php
    [extension] => php
    [filename]  => fileSystemFunction
)
*/
echo "</pre>";

echo pathinfo(__FILE__, PATHINFO_DIRNAME)   . "<br>"; // C:\xampp\htdocs\BroadCastPhp\FileSystem
echo pathinfo(__FILE__, PATHINFO_BASENAME)  . "<br>"; // fileSystemFunction.php
echo pathinfo(__FILE__, PATHINFO_EXTENSION) . "<br>"; // php
echo pathinfo(__FILE__, PATHINFO_FILENAME)  . "<br>"; // fileSystemFunction

echo "\\*==============================*\\<br>";



/*
============================
== File System Functions ==
============================
- fopen(FileName[Required] , Mode[Required] , IncludePath[Optional] , Context[Optional])
    - Opens File Or URL 
        - Mode 
            - [r]  For Read         => Pointer At The Beginning
            - [r+] For Read & Write => Pointer At The Beginning
            - [w]  For Write        => Pointer At The Beginning + Truncate To 0 Length => Created If Not Exists
            - [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Created If Not Exists

            - [a]  For Write        => Pointer At The End + Creste If Not Exists
            - [a+] For Read & Write => Pointer At The End + Creste If Not Exists
            - [x]  Create + Open For Write        => Pointer At The Beginning 
            - [x+] Create + Open For Read & Write => Pointer At The Beginning Create + Open

            - [c]
                - For Write 
                - Create If Not Exists
                - No Problem If Its Exists
                - No Truncation
                - Pointer At The Beginning
            - [c+] For Read & Write


- fgets(File [Required] , Length[Optional])
    - Get A Data From An Open File
    - Length => Number Of Bytes To Read || End Of Line If No Length

- fread(File [Required] , Length[Required])
    - Get A Data From An Open File
    - Length => Maximum Number Of Bytes To Read 

- fwrite(File [Required] , String[Required] , Length [Optional])
    - Write To An Open File
    - Length => Maximum Number Of Bytes To Write 

- fclose(File[Required])
    - Closes An Open File Pointer

- file(File[Required] , Flag[Optional] Context[Optional])
    - Reads Entire File Into An Array

- feof(File[Required])
    - Tests for EOF On A File Pointer
*/

$handle = fopen("test.txt", "r");

//  fgets()
// echo fgets($handle)     . "<br>"; // I,am Love The Language PHP  
// echo fgets($handle, 10) . "<br>"; // I,am Love


// fread()
// echo fread($handle, 1024)  . "<br>"; // I,am Love The Language PHP

// // fclose()
// fclose($handle);  // Required The Closed File

// $handle2 = fopen("test.txt", "a+");

// echo fread($handle2, 1024) . "<br>"; // I,am Love The Language PHP

// fclose($handle2);
// echo "<br>";


// fwrite()
// $handle3 = fopen("test.txt", "a");

// fwrite($handle3, "\r\nThis A New Line One")     . "<br>";
// fwrite($handle3, "\r\nThis A New Line Two", 8) . "<br>";

// $handle4 = fopen("test.txt", "a+");

// echo fread($handle4, 1024) . "<br>"; // I,am Love The Language PHP This A New Line One This A

// fclose($handle4);

echo "<br>";


// file()

// echo "<pre>";
// print_r(file('test.txt'));
/*
Array
(
    [0] => This A New Line One

    [1] => This A New Line Two

    [2] => This A New Line Three

    [3] => This A New Line Four
)
*/
// echo "</pre>";

// $line = 1;
// while (!feof($handle)) {
//     echo "Line {$line} => " . fgets($handle) . "<br>";
//     $line++;
//     /*
//     Line 1 => This A New Line One
//     Line 2 => This A New Line Two
//     Line 3 => This A New Line Three
//     Line 4 => This A New Line Four
//     */
// }

// for ($i = 0; $i <  count(file("test.txt")); $i++) {

//     echo fgets($handle) . "<br>";
//     /*
//     This A New Line One
//     This A New Line Two
//     This A New Line Three
//     This A New Line Four
//     */
// }

// fclose($handle);

echo "\\*==============================*\\<br>";




/*
============================
== File System Functions ==
============================
- rewind(File[Required] )
    - Return The Pointer To The Begiinning Of The File

- ftell(Fille[Required])
    - Return Current Position Of The Pointer

- fseek(File[Required] , Offset[Required] , Whence[Optional] = SEEK_SET )
    - Go To A Position
    - Offset In Bytes
    - SEEK_SET => Equal To Offset
    - SEEK_CUR => Current + Offset
    - SEEK_END => EOF + Offset [Accept Negative]
*/


$handle5 = fopen("test.txt", "r");

echo fgets($handle5) . "<br>"; // This A New Line One
echo fgets($handle5) . "<br>"; // This A New Line Two
echo fgets($handle5) . "<br>"; // This A New Line Three

// ftell
echo ftell($handle5) . "<br>"; // 65

// rewind
rewind($handle5); // Begiinning Of The File

echo ftell($handle5) . "<br>"; // 0

echo fgets($handle5) . "<br>"; // This A New Line One

fseek($handle5, 28);
echo fgets($handle5) . "<br>"; // New Line Two

fseek($handle5, 49);
echo fgets($handle5) . "<br>"; // New Line Three

fseek($handle5, -4, SEEK_END);
echo fgets($handle5) . "<br>"; // Four

fseek($handle5, 4, SEEK_SET);
echo fgets($handle5) . "<br>"; // A New Line One

fseek($handle5, 4, SEEK_CUR);
echo fgets($handle5) . "<br>"; // A New Line Two

fseek($handle5, 4, SEEK_CUR);
echo fgets($handle5) . "<br>"; // A New Line Three


fclose($handle5);

echo "\\*==============================*\\<br>";


/*
============================
== File System Functions ==
============================
- glob(Pattern[Required] , Flags[Optional] )
    - Find pathnames matching a pattern And Return Array

- rename(OldName[Required] , NewName[Required]) => Move
    - Renames a File Or Directory

- copy(Old[Required] , New[Required] , Context[Optional])
    - Copies file

- unlink(File[Required] , Context[Optional])
    - Deletes A File

    Same Concept
        - opendir
        - readdir
        - closedir
*/


//glob = >  Example 1
echo "<pre>";
print_r(glob("*.*"));
/*
Array
(
    [0] => fileSystemFunction.php
    [1] => test.txt
)
*/
echo "</pre>";

//glob = >  Example 2
echo "<pre>";
print_r(glob("../Function/*.*"));
/*
Array
(
    [0] => ../Function/AnonymousFunction.php
    [1] => ../Function/ArrowFunction.php
    [2] => ../Function/Function.php
)
*/
echo "</pre>";

//glob = >  Example 3
echo "<pre>";
print_r(glob("*.txt"));
/*
Array
(
    [0] => test.txt
)
*/
echo "</pre>";




// Rename() 

// rename("Old/work2.txt" , "Old/work.txt"); // Rename Same Place

// rename("Old/work.txt" , "New/work.txt"); // Move

// rename("test/testing.txt" , "New/work3.txt"); // Move And Rename


// Copy()

// copy("New/work3.txt", "Old/work3.txt"); // Copy Without Rename


// copy("New/work3.txt", "Old/work4.txt"); // Copy With Rename


// unlink()

// unlink("Old/work4.txt"); // Deleted File Old/work4.txt


echo "\\*==============================*\\<br>";


/*
============================
== File System Functions ==
============================
- file_get_contents(File[Required] , Include_path[Optional] , Context[Optional] , Start[Optional] , MaxLength[Optional] )
    - Reads entire file into a string

- file_put_contents(File[Required] , Data[Required] , Mode[Optional] , Context[Optional] )
    - Write data to a file

        - Mode
            FILE_APPEND => if File Exists Append To It 

- Create If Not Exists
- Open And Close
- Return Number Of Bytes

- Search
    - Get Set Include Path
*/

// get_include_path
echo get_include_path()                   . "<br>"; // C:\xampp\php\PEAR

// file_get_contents
echo file_get_contents("Old/work3.txt")   . "<br>"; // Hello My Friend

// include_path
echo file_get_contents("work8.txt", true) . "<br>"; // This Is File In C:\xampp\php\PEAR

// Start & MaxLength
echo file_get_contents("work8.txt", true, Null, 4) . "<br>"; // Is File In C:\xampp\php\PEAR
echo file_get_contents("work8.txt", true, Null, 4, 8) . "<br>"; // Is File



// file_put_contents 

// Override On File

file_put_contents("Old/work3.txt", "This Is New Line1") . "<br>"; //  Modification File Override 

file_put_contents("Old/work3.txt", "\r\nThis Is New Line2", FILE_APPEND) . "<br>"; // Add Content In File => This Is New Line2

echo file_put_contents("Old/work3.txt", "\r\nThis Is New Line3", FILE_APPEND) . "<br>"; // Add Content In File => This Is New Line3 And Number Of Bytes => 19

echo "\\*==============================*\\<br>";

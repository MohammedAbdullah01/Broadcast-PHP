<?php

/*
=============
== String ==
=============
- Access Element
  - String Is Array Of Characters
  - Access Elements By Index "Zero Based Indexing"
  - Nagative Index Are Allowed

- Update Elements
  - Update Current Elements
  - Add New Elements

Search
  Single-Byte Multi-Byte
*/

// Access Element
$str = "Mohammed";

echo "First Letter Is {$str[0]} <br>"; // M

echo "4th Letter Is $str[3] <br>"; // a

echo "Numbers Of Letters " . strlen($str) . "<br>"; // 8

echo "Last Letter Is " . $str[-1] . "<br>"; // d

// OR
// echo "Last Letter Is " . $str[strlen($str) - 1 ] . "<br>"; // d

echo '<br>';
echo "\\*==============================*\\<br>";

// Update Elements

$str[4] = 'n';
$str[9] = 'A';
echo $str; // Mohanmed A

echo '<br>';
echo "\\*==============================*\\<br>";

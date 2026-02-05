<?php

$a = 10; // Integer variable
$b = 20.5; // Float variable
$c = "Hello, World!"; // String variable
$d = true; // Boolean variable
$e = null; // Null variable
$f = array(1, 2, 3); // Array variable
$g = new stdClass(); // Object variable

echo "Integer: $a<br>"; // Outputting an integer variable


echo "Array: " . implode(", ", $f) . "<br>"; // Outputting an array variable. implode() is used to join array elements with a string

echo "Array: $f[0], $f[1], $f[2]<br>"; // Outputting an array variable using index

echo "Object: " . json_encode($g) . "<br> <br>"; // Outputting an object variable. json_encode() is used to convert an object to a JSON string

var_dump($a); // Displaying the type and value of the variable
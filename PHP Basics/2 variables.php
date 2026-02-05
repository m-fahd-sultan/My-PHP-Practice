<?php

$a = 10; // Integer variable
$b = 20.5; // Float variable
$c = "Hello, World!"; // String variable
$d = true; // Boolean variable
$e = null; // Null variable
$f = array(1, 2, 3); // Array variable



echo "Integer: $a<br>"; // Outputting an integer variable

echo "Float: $b<br>"; // Outputting a float variable

echo "String: $c<br>"; // Outputting a string variable

echo "Boolean: $d<br>"; // Outputting a boolean variable

echo "Null: $e<br>"; // Outputting a null variable

echo "Array: " . implode(", ", $f) . "<br>"; // Outputting an array variable. implode() is used to join array elements with a string

echo "Array: $f[0], $f[1], $f[2]<br>"; // Outputting an array variable using index
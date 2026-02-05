<?php

$x =5; //
$x = 10; // reassigning the value of x. This variable is changable
echo $x ."<br>";

define("a", 5); // constant variable. This variable is not changable
echo a; 

define("b", "hello world", true); // true is used to make the constant variable case insensitive
echo "<br>" . b ; // this will work because of the case insensitive constant variable
//dollae sign is not used in constant variable
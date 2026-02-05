<?php

$colors = array("red", "green", "blue", "yellow"); // Indexed array
foreach ($colors as $col) {
    echo "$col <br>"; // Outputs each color in the array
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // Associative array
foreach ($age as $name => $value) {
    echo "$name is $value years old.<br>"; // Outputs each name and age
}
//here $name is the key and $value is the value of the associative array. we can use any name for the key and value variables.
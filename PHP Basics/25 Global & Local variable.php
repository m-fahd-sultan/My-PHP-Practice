<?php

function test() {
    $x = 5; // Local variable
    echo "Inside function: x = $x <br>"; // Accessing local variable
}
test(); // Call the function
//outside function: x = 5 will not work

// Using global variables
global $y; // Declare $y as a global variable
$y = 10; // Global variable


function testGlobal() {
    global $y; // Access the global variable
    echo "Inside function: y = $y\n";
}
testGlobal(); // Call the function
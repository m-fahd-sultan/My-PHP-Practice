<?php

function add($a, $b) {
    return $a + $b;
}

$result = add(5, 10);
echo $result;

echo add(5, 30); // 15

//we can only reutrn one value from a function with parameter

// //second example
// function sum($x = 10, $y = 20) {
//     return $x + $y;
// }

// sum(); // 30
// sum(5); // 25
// sum(5, 10); // 15
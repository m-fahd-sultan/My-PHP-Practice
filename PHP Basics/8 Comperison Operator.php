<?php

// == Equal to x == y
// === Equal value and type x === y
// != Not equal x != y
// !== Not equal value or type x !== y
// <> Not equal x <> y

// > Greater than x > y
// >= Greater than or equal to x >= y
// < Less than x < y
// <= Less than or equal to x <= y
// <=> Spaceship operator x <=> y (returns -1, 0, 1)

$a = "20";
$b = 20;

if ($a == $b) {
    echo "$a is equal to $b\n";
} else {
    echo "$a is not equal to $b\n";
}


// && Logical AND
// || Logical OR
// ! Logical NOT
// and Logical AND (lower precedence than &&)
// or Logical OR (lower precedence than ||)
// xor Logical XOR (lower precedence than && and ||)

// and, or, xor are not recommended for use in PHP 7 and later versions

// XOR when even number of true values, result is false
// XOR when odd number of true values, result is true
<?php

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return ($n * factorial($n - 1));
    }
}
 echo factorial(5); // 120

 //here 5 will go to $n and 5*factorial(4) will be returned
 //then 4 will go to $n and 4*factorial(3) will be returned and so on
 //until $n becomes 0 and 1 will be returned
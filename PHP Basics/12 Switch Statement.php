<?php

$weekday = 2; 

switch ($weekday) {
    case 1:
        echo "Monday <br>";
        break;
    case 2:
        echo "Tuesday <br>";
        break;
    case 3:
        echo "Wednesday <br>";
        break;
    default:
        echo "Invalid day of the week. <br>";
}

$age = 20;
switch (true) {
    case ($age >18 && $age < 30):
        echo "You are a young adult. <br>";
        break;
        default:
        echo "You are not a young adult. <br>";
}
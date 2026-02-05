<?php


for ($i = 1; $i <= 100; $i += 10) { // incrementing $i by 10 in each iteration
    for ($j = $i; $j < $i + 10; $j++) { // it means $j will start from $i and will go to $i + 10
        echo $j . " ";
    }
    echo "<br>";
}

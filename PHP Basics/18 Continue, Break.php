<?php

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue; // Skip the rest of the loop when $i is 5
    }
    echo $i . " ";
}
 
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo $i . " ";
}
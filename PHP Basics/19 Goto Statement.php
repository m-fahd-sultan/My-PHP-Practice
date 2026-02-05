<?php

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        goto abc; // Jump to the end label when $i is 5
    }
    echo $i . " ";
}

abc: // This is the label we jump to
echo "End of loop"; // This will be executed after the goto statement



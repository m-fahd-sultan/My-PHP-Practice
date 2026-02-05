<?php

$x =15;

($x > 10) ? print("x is greater than 10 <br>") : print("x is less than or equal to 10 <br>"); //firsrt example

($x >20) ? $z = "Greater <br>" : $z = "Smaller <br>"; // second example
echo $z; // Output: Smaller

$z = "Valueis: " . ($x > 10 ? "Greater" : "Smaller"); // third example
echo $z; // Output: Valueis: Greater
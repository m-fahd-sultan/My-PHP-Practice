<?php

$marks =[
    "John" => array("Math" => 85, "Science" => 90, "English" => 88),
    "Jane" => array("Math" => 78, "Science" => 82, "English" => 80),
    "Doe" => array("Math" => 92, "Science" => 95, "English" => 89)
];

// Displaying the multidimensional associative array
echo "<pre>";
print_r($marks);
echo "</pre>";

//looping through the multidimensional associative array

foreach ($marks as $student => $subjects) {
    echo "Marks of $student:\n";
    foreach ($subjects as $subject => $mark) {
        echo "$subject: $mark\n";
    }
    echo "<br>";
}

// Is Multidimensional Associative Array print in table format?
echo "<table border='1'>";
echo "<tr><th>Student</th><th>Math</th><th>Science</th><th>English</th></tr>";
foreach ($marks as $student => $subjects) {
    echo "<tr>";
    echo "<td>$student</td>";
    foreach ($subjects as $subject => $mark) {
        echo "<td>$mark</td>";
    }
    echo "</tr>";
}
echo "</table>";
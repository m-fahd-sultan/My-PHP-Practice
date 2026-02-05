<?php

// Multidimensional array
$emp =[  //Outside array
    [1, "John", "Manager", 5000], //Inner array 1
    [2, "Jane", "Developer", 4000],
    [3, "Doe", "Designer", 3500],
    [4, "Smith", "Tester", 3000]  
];

echo $emp[0][1]; // Outputs "John"
echo "<br>";

echo "<pre>";
print_r($emp); // Prints the entire multidimensional array in a readable format
echo "</pre>";



// Loop through the multidimensional array
foreach ($emp as $row) { // Loop through each inner array
    foreach ($row as $col) { // Loop through each element in the inner array
        echo "$col "; // Outputs each element in the inner array
    }
    echo "<br>"; // New line after each inner array
}
// Outputs each inner array in a new line


//to show in Table format
echo "<table border='1'>"; // Start table with border
echo "<tr>
          <th>ID</th>
          <th>Name</th>
          <th>Position</th>
          <th>Salary</th>
     </tr>"; // Table header

foreach ($emp as $row) { // Loop through each inner array
    echo "<tr>"; // Start a new row each time
    foreach ($row as $col) { // Loop through each element in the inner array
        echo "<td>$col</td>"; // Output each element in a table cell
    }
    echo "</tr>"; // End the table row
}

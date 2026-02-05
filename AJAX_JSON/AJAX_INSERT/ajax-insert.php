<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$conn = mysqli_connect("localhost", "root", "", "test");
 $sql = "SELECT first_name, last_name FROM students WHERE first_name = '{$first_name}' AND last_name='{$last_name}' "; // Check if the username already exists
    $result = mysqli_query ($conn, $sql) or die("Query Failed: " . mysqli_error($conn)); // TO run the query

    if(mysqli_num_rows($result) > 0) {
        echo 2;
    }else{
$sql1 = "INSERT INTO students(first_name, last_name) VALUES ('{$first_name}','{$last_name}')";
// $result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql1)){
    echo 1;
}else{
    echo 0;
}
    }

?>
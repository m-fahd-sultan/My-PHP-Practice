<?php



$conn = mysqli_connect("localhost", "root", "", "practiceajax");

$student_id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$city = $_POST["city"];

$sql = "UPDATE restapi SET Name='{$name}', age='{$age}', city = '{$city}' WHERE id='{$student_id}'";

if(mysqli_query($conn, $sql)){
    echo 1;
}
else{
    echo 0;
}


?>

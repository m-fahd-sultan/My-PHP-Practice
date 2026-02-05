<?php

$conn = mysqli_connect("localhost", "root", "", "practiceajax");

$name = $_POST['sname'];
$age = $_POST['sage'];
$city = $_POST['scity'];

$sql = "INSERT INTO restapi(Name, age, city) VALUES ('{$name}', '{$age}', '{$city}')";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>

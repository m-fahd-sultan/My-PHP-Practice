
<?php

$form_id = $_POST['ID'];
$form_name = $_POST['name'];
$form_address = $_POST['address'];
$form_phone = $_POST['phone'];

$conn = mysqli_connect("localhost", "root", "", "practice") or die("Connection failed: "); 
$sql = "INSERT INTO practice_data(ID, Name, Address, Phone) VALUES('$form_id','$form_name','$form_address','$form_phone')";
$result = mysqli_query($conn, $sql) or die("Unsuccessfull"); // mysqli_query is used to execute the SQL query on the database connection

header("Location:index.php"); 
mysqli_close($conn); 
?>
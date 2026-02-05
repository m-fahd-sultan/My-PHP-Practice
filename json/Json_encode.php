<?php
$conn = mysqli_connect("localhost","root","","test");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($output); // Convert the array to JSON format like in object notation

// we use this data everywhere in our application by just copying this url
// http://localhost/work/json/Json_encode.php
?>


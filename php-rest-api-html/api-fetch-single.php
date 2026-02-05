<?php

$eid = $_POST["id"];
$conn = mysqli_connect("localhost", "root", "", "practiceajax");

$sql = "SELECT * FROM restapi WHERE id = '{$eid}'";
$output = "";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
        <td>Name</td>
       <td> <input type='text'  id='edit-name' value='{$row["Name"]}'></td>
       <td> <input type='text'  id='edit-id' hidden value='{$row["id"]}'> </td>

        <td>Age</td>
        <td><input type='text'  id='edit-age' value='{$row["age"]}'></td>

        <td>City</td>
        <td><input type='text'  id='edit-city' value='{$row["city"]}'></td>
        
        <td><input type='submit'  id='edit-submit' value='submit'></td>
        </tr>";
    }
    echo $output;
}

?>

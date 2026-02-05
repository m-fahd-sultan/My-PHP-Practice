<?php

$conn = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($result)>0){
    $output = '<table border="1" width= "100%" cellspacing = "0" cellpadding = "10px">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th width = "100px" colspan="2">Action</td>
    </tr>';
    while($row = mysqli_fetch_assoc($result)){
        $output .="
        <tr>
        <td>{$row["id"]}</td>
        <td>{$row["first_name"]} {$row["last_name"]}</td>
         <td> <button class = 'update-btn' data-id='{$row["id"]}'>UPDATE </button> </td>  
        <td> <button class = 'delete-btn' data-id='{$row["id"]}'>DELETE </button> </td>  
        </tr>"; // 'data-' is use to make own attribute, use in html
    } 
    $output .="</table>";
    mysqli_close($conn);
    echo $output;
}else{
 echo "<h2> NO RECORD FOUND</h2>";
}
?>
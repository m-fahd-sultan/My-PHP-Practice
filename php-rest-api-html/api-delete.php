<?php
$delete_id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "practiceajax");
$sql = "DELETE FROM restapi WHERE id = '{$delete_id}'";
if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>

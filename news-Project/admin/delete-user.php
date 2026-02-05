<?php
include "config.php";
$u_id = $_GET['id']; // Get the user ID from the URL

$sql = "DELETE FROM user WHERE user_id = {$u_id}"; // SQL query to delete the user
$result = mysqli_query($conn, $sql); // Execute the query

if(mysqli_query($conn, $sql)){
    header("Location: http://localhost/news-project/admin/users.php"); // Redirect to users page after successful deletion
} else {
    echo "<p style='color: red;'> Can\'t delete user </p>"; // \' use due to single quote in string
}
mysqli_close($conn); // Close the database connection

?>
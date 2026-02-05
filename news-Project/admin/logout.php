
<?php

include "header.php";

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/news-project/admin/index.php"); // Redirect to login page after logout
?>
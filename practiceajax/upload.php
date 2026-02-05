<?php



    $conn = mysqli_connect("localhost", "root", "", "practiceajax");
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO practice(Name, Email, Phone, Massage) VALUES ('$name', '$email', '$phone', '$message')";
    if(mysqli_query($conn, $sql)){
        echo "1";
    } else {
        echo "0";
    }

?>
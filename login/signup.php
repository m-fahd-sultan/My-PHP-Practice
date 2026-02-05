<?php
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
   $conn = mysqli_connect("localhost", "root", "", "login") or die("Connection failed: " . mysqli_connect_error());
    $sql  = "INSERT INTO registration (Name, Email, Password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query ($conn, $sql) or die("Query failed: " . mysqli_error($conn));

    if($result){
       header("Location: login.php");
        exit();
    } else {
        echo "<script>alert('Registration failed. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="main">
    <div class="container mx-auto flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-3xl font-bold mb-6">Sign Up</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="w-full max-w-sm">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="username" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" name="signup" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign Up</button>
        </form>
    </div>

</div>
</body>
</html>


                        <?php 
                        if(isset($_POST['login'])) {
                            include "config.php"; 

                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                            $password = md5($_POST['password']);

                            $sql = "SELECT * FROM registration WHERE Email = '{$email}' AND password = '{$password}'";
                            $result = mysqli_query ($conn, $sql) or die ("query failed"); 

                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                                    session_start();

                                    header("Location:signup.php"); // Redirect to dashboard after successful login
                                }

                            }else{
                                echo '<div class = alert alert-danger style = color: red"> Username and Password are not matched.</div>';
                            }
                        }
                        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="container mx-auto flex flex-col items-center justify-center max-h-screen bg-gray-100 p-6 rounded-lg shadow-md max-w-md mx-auto mt-10 ">
        <h1 class="text-3xl font-bold mb-6">Login</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="w-full max">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" name="login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
        </form>
        </div>
</body>
</html>
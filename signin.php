<?php
include_once 'conn.php';
$en = $_GET['e'];

if (isset($_POST['submit'])){
    $uname = ($_POST['uname']);             
    $pass = ($_POST['pass']); 


$sql = "SELECT * FROM users where username='".$uname."' and password='".$pass."' limit 1;";
        $result = mysqli_query($conn, $sql);
        $checkresult = mysqli_num_rows($result);

        if($checkresult == 1)
        {
            header("Location: marks.php?e=$en");
            exit();
        }
        else
        {
            echo "error logging in";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">
        <img src="logo.png" style="width:25%">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Sign-in to get details!</p>
                <br><br>
                <form class="flex flex-col pt-3 md:pt-8" name="myForm" method="post" action="#">
                    <div class="flex flex-col pt-4">
                        <label for="username" class="text-lg"> <b>Username</b></label>
                        <input style="border: 2px solid black" type="text" name="uname" placeholder="Your Username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg"> <b>Password</b></label>
                        <input style="border: 2px solid black" type="password" name="pass" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
    
                    <input name="submit" type="submit" value="Sign-in" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
            </div>

        </div>
        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="signup.jpg">
        </div>
    </div>

</body>
</html>